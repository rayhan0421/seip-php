<?php

//str_pad() is  like html padding



echo "str_pad — Pad a string to a certain length with another string"."<br/>";




$input = "Alien";
echo str_pad($input, 10)."<br/>";                      // produces "Alien     "
echo str_pad($input, 10, "-=", STR_PAD_LEFT)."<br/>";  // produces "-=-=-Alien"
echo str_pad($input, 10, "_", STR_PAD_BOTH)."<br/>";   // produces "__Alien___"
echo str_pad($input,  6, "___")."<br/>";               // produces "Alien_"
echo str_pad($input,  3, "*")."<br/>";

echo "<hr/>";


$input = "code2017: bangladesh ";
echo str_pad($input, 23)."<br/>";
echo str_pad($input, 30, "-=", STR_PAD_LEFT)."<br/>";
echo str_pad($input, 25, "_", STR_PAD_BOTH)."<br/>";
echo str_pad($input,  26, "___")."<br/>"."<br/>";
echo str_pad($input,  23, "*")."<br/>";

echo "<hr/>";
echo "<h1>is not applicable cause string langht less than second argument please increase strring lenght</h1>"."<br/>";
$input = "code-2017: is here  ";
echo str_pad($input, 10)."<br/>";
echo str_pad($input, 10, "-=", STR_PAD_LEFT)."<br/>";
echo str_pad($input, 10, "_", STR_PAD_BOTH)."<br/>";
echo str_pad($input,  6, "___")."<br/>"."<br/>";
echo str_pad($input,  3, "*")."<br/>";