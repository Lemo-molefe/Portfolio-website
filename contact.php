<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "email@example.com";
$subject = "Contact Form Submission";
$body = "Name: $name\nEmail: $email\nMessage: $message";