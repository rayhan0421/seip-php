<pre>
<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 25-12-2016
 * Time: 08:59 PM
 */


function array_keys_recursive($myArray, $MAXDEPTH = INF, $depth = 0, $arrayKeys = array()){
    if($depth < $MAXDEPTH){
        $depth++;
        $keys = array_keys($myArray);
        foreach($keys as $key){
            if(is_array($myArray[$key])){
                $arrayKeys[$key] = array_keys_recursive($myArray[$key], $MAXDEPTH, $depth);
            }
        }
    }

    return $arrayKeys;
}

$input = array(
    'Player' => array(
        'id' => '4',
        'state' => 'active',
    ),
    'LevelSimulation' => array(
        'id' => '1',
        'simulation_id' => '1',
        'level_id' => '1',
        'Level' => array(
            'id' => '1',
            'city_id' => '8',
            'City' => array(
                'id' => '8',
                'class' => 'home',
            )
        )
    ),
    'User' => array(
        'id' => '48',
        'gender' => 'M',
        'group' => 'user',
        'username' => 'Hello'
    )
);

$d= array();

$d= array_keys_recursive($input);


var_dump($d);
echo "<hr/>";
function recursive_keys($input, $search_value = null){

    $output = ($search_value !== null ? array_keys($input, $search_value) : array_keys($input)) ;
    foreach($input as $sub){
        if(is_array($sub)){
            $output = ($search_value !== null ? array_merge($output, recursive_keys($sub, $search_value)) : array_merge($output, recursive_keys($sub))) ;
        }
    }
    return $output ;
}

$t= array();

$t = recursive_keys($input);

print_r(array_unique($t));