<h1>array_intersect_uassoc</h1>
<h2>with additional index check, compares indexes by a callback function</h2>
<p>The array_intersect_uassoc() function compares the keys and values of two (or more) arrays, and returns the matches</p>

<hr/>

<pre>

<?php

// callback function is required

function myfunction($a,$b)
{
    if ($a===$b)
    {
        return 0;
    }
    return ($a>$b)?1:-1;
}

function myfunction2($a,$b)
{
    if ($a==$b)
    {
        return 0;
    }
    return ($a<$b)?1:-1;
}
// must match key and value
$a1=array("a"=>"red","bbb"=>"green","3"=>"blue","pink");
$a2=array("a"=>"red","bbb"=>"green","34"=>"blue",254);


$result=array_intersect_uassoc($a1,$a2,"myfunction");
print_r($result);

echo "<hr/>";

// same as array_intersect_uassoc()
print_r(array_uintersect_assoc($a1,$a2,"myfunction2"));


