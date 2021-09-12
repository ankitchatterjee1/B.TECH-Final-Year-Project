<?php
session_start(); // Staring Session
$captchanumber = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz'; // Initializing PHP variable with string
$captchanumber = substr(str_shuffle($captchanumber), 0, 6); // Getting first 6 word after shuffle.
$_SESSION["code"] = $captchanumber; // Initializing session variable with above generated sub-string
$image = imagecreatefromjpeg("image/captcha1.jpg"); // Generating CAPTCHA
$foreground = imagecolorallocate($image, 0, 0, 0); // Font Color
imagestring($image, 80, 70, 30, $captchanumber, $foreground);
header('Content-type: image/png');
imagepng($image);
?>