<?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["msgsubject"];
    $message = $_POST["message"];

    $to = "ali@ali-ilman.com";
    $headers = "From: ".$name." ".$email;

    mail($to, $subject, $message, $headers);
    header("Location: index.html");

?>