<?php

$array = ['Kale', 'Kaleidoscope', 'Aardvark', 'Apple', 'Leicester', 'Lovely'];

array_walk($array, function(&$element, $index) {
    $element = array($element, $index); // decorate
});

usort($array, function($a, $b) {
    // $a[0] and $b[0] contain the primary sort key
    // $a[1] and $b[1] contain the secondary sort key
    $tmp = strcmp($a[0][0], $b[0][0]);

    if ($tmp != 0) {
        return $tmp; // use primary key comparison results
    }

    return $a[1] - $b[1]; // use secondary key
});

array_walk($array, function(&$element) {
    $element = $element[0];
});

var_dump($array);