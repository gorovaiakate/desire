<?php
    $post = (!empty($_POST)) ? true : false;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    if($post){
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $message = htmlspecialchars($message);

        $name = urldecode($name);
        $email = urldecode($email);
        $message = urldecode($message);

        $email = trim($email);
        $error = '';

        if(!$error){
            $name_tema = "=?utf-8?b?". base64_encode($name) ."?=";

            $subject ="Новое сообщение с сайта desire";
            $subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";

            $message1 = "\n\nИмя: " .$name. "\n\nПочта: " .$email. "\n\nСообщение: " .$message. "\n\n";

            $header = "Content-Type: text/plain; charset=utf-8\n";

            $header .= "From: Новое сообщение <example@gmail.com>\n\n";	
            $mail = mail("jungarkajuna@gmail.com", $subject1, iconv ('utf-8', 'windows-1251', $message1), iconv ('utf-8', 'windows-1251', $header));

            if($mail) {
                echo 'OK';
            }
        }else {
            echo '<div class="notification_error">'.$error.'</div>';
        }
    }
?>