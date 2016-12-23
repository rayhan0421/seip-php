<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 23-12-2016
 * Time: 01:10 AM
 */


/**
 * Filtering a array by its keys using a callback.
 *
 * @param $array array The array to filter
 * @param $callback Callback The filter callback, that will get the key as first argument.
 *
 * @return array The remaining key => value combinations from $array.
 */
function array_filter_key(array $array, $callback)
{
    $matchedKeys = array_filter(array_keys($array), $callback);
    return array_intersect_key($array, array_flip($matchedKeys));
}