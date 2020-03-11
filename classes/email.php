<?php

$to = "feedbacks@loveworldsat.org";
$subject = $_POST['subject'];

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['message'];

$hearders .= "Content-type: text/html;\r\n";
$hearders .= "From: $email";

mail($to, $subject, $comment, $hearders);

?>