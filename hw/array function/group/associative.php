<pre>
<?php
include_once ("array_group_by.php");

$records = [
    [
        "state"  => "IN",
        "city"   => "Indianapolis",
        "object" => "School bus"
    ],
    [
        "state"  => "IN",
        "city"   => "Indianapolis",
        "object" => "Manhole"
    ],
    [
        "state"  => "IN",
        "city"   => "Plainfield",
        "object" => "Basketball"
    ],
    [
        "state"  => "CA",
        "city"   => "San Diego",
        "object" => "Light bulb"
    ],
    [
        "state"  => "CA",
        "city"   => "Mountain View",
        "object" => "Space pen"
    ]
];

$grouped = array_group_by( $records, "state", "city" );


print_r($grouped);
?>