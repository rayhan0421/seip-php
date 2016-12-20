<h1> translate one to another:  </h1>

<h1>The strtr() function translates certain characters in a string.</h1>

<?php

// for unicode , bangla china, hindi
// this function is not efficiant for unicode


function strtr_utf8($str, $from, $to) {
    $keys = array();
    $values = array();
    preg_match_all('/./u', $from, $keys);
    preg_match_all('/./u', $to, $values);
    $mapping = array_combine($keys[0], $values[0]);
    return strtr($str, $mapping);
}

echo "original string : "."ছোট বেলায় ডিকশনারি থেকে প্রতিদিন একটা করে শব্দ মুখস্ত করার পরামর্শ পায় নি এমন লোক খুঁজে পাওয়া দুষ্কর"."<br/>";

$after_translate= strtr_utf8(" ছোট বেলায় ডিকশনারি থেকে প্রতিদিন একটা করে শব্দ মুখস্ত করার পরামর্শ পায় নি এমন লোক খুঁজে পাওয়া দুষ্কর" , "লোক" ,"এমন");
echo $after_translate;

echo "<hr/>";



// convert hi to hello
// translate hello to hi



$trans = array("h" => "-", "hello" => "hi", "hi" => "hello");
echo strtr("hi all h, I said hello", $trans);

echo "<br/>";

$trans = array("ab" => "01");
echo strtr("baab", $trans);

echo "<hr/>";

$array = array("tech" => "help", "support" => "right now");

echo "original string is :"."  ". "Do you need some <span style='color:red'>tech</span> <span style='color:blue'>support </span>?"."<br/> <br/>";
echo strtr("Do you need some tech support?",$array);





