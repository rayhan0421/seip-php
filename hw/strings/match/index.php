<?php



function hash_string($str, $len)
{
    $hash = '';

    $hash_table = array(
        'h' => 1,
        'e' => 2,
        'l' => 3,
        'o' => 4,
        'w' => 5,
        'o'=>6,
        'r' => 7,
        'd' => 8,
    );

    for ($i = 0; $i < $len; $i++) {
        $hash .= $hash_table[$str{$i}];
    }

    return (int)$hash;
}

function rabin_karp($text, $pattern)
{
    $n = strlen($text);
    $m = strlen($pattern);

    $text_hash = hash_string(substr($text, 0, $m), $m);
    $pattern_hash = hash_string($pattern, $m);

    for ($i = 0; $i < $n-$m+1; $i++) {
        if ($text_hash == $pattern_hash) {
            return $i;
        }

        $text_hash = hash_string(substr($text, $i, $m), $m);
    }

    return -1;
}

// 2
// pattern match

//rabin_karp

// string match
echo rabin_karp('hello world', 'llo');
echo "<br/>";
echo rabin_karp('hello world', 'ello');
