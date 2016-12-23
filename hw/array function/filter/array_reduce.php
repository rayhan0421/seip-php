<?php

$our_array = get_some_data_from_somewhere();

// We want to exclude posts from the following array
$exclude = array( 15, 27, 123 );

// Now reduce the array, using a closure
$reduced = array_reduce( $our_array, function( $carry, $item ) use ( $exclude ) {
    if ( ! in_array( $item->ID, $exclude ) ) {
        $carry[ $post->ID ] = $item;
    }

    return $carry;
} );