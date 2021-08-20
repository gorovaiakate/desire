<?php
    $connect = mysqli_connect('localhost', 'cv89914_desire', 'ty7r8ZzW', 'cv89914_desire');

    $post2 = (!empty($_POST)) ? true : false;
    $comment = $_POST['comment'];
    $user = $_POST['user'];
    $mail = $_POST['mail'];
    if($post2){
        $comment = htmlspecialchars($_POST['comment']);
        $comment = urldecode($comment);
        $user = htmlspecialchars($_POST['user']);
        $user = urldecode($user);
        $mail = htmlspecialchars($_POST['mail']);
        $mail = urldecode($mail);
        $mail = trim($mail);
        $query = mysqli_query($connect, "INSERT INTO `comment` SET comment = '$comment', user = '$user', mail = '$mail'");
        if($query) {
            echo 'OK';
        }
    }
?>