<?php

if (isset($_POST['submit'])) {
$name = $_POST['name']; 
$subject = $_POST['subject'];
$mailFrom = $_POST['mail'];
$subject = $_POST['message'];

$mailTo = "sam@pebblesandsky.com";
$headers = "From: ".$mailFrom;
$txt = "You have received and email from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}