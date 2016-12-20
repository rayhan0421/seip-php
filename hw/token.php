<?php


// read image meta data
$exif= exif_read_data('../exam/lab-exam-01/question.jpg', 'IFD0');

echo $exif===false ? "No header data found.<br />\n" : "Image contains headers<br />\n";

$exif = exif_read_data('../exam/lab-exam-01/question.jpg', 0, true);
echo "../exam/lab-exam-01/question.jpg:<br />\n";
foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
        echo "$key.$name: $val<br />\n";
    }
}



echo "<hr/>";

$tokens = token_get_all(file_get_contents("comment.php"));
$comments = array();
foreach($tokens as $token) {
    if($token[0] == T_COMMENT || $token[0] == T_DOC_COMMENT) {
        $comments[] = $token[1];
    }
}
print_r($comments);

// comment data read

// comment read

// plugin develop

//token

//october