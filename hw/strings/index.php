<?php

// string manipulation function

echo '<center><h1>php chop()</h1></center>';

$str = "Hello World!\n\n";
echo $str;
echo chop($str);

/*
 *
 * The following characters are removed if the charlist parameter is empty:
"\0" - NULL
"\t" - tab
"\n" - new line
"\x0B" - vertical tab
"\r" - carriage return
" " - ordinary white space
 */

