<?php

$text = 'This is a Simple text.';

// this echoes "is is a Simple text." because 'i' is matched first
echo strpbrk($text, 'mi');

echo "<hr/>";

$email = "rayhan0421@gmail.com";

echo strpbrk($email,'@');