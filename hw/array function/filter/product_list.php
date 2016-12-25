<?php

$product=array(
    array(
        array("Epson Printer L110",100,4500),
        array("Canon Printer",100,5000),
        array("HP Laptop",500,40000)
    ),
    array(
        array("Micromax Canvas Lite",200,9000),
        array("Samsung Galaxy",300,15000),
        array("LAVA",100,4000)
    ),
    array(
        array("Sandisk 16 GB Pendrive",500,500),
        array("Card Reader",500,50),
        array("UPS",200,3000)
    )
);

// accessing elements from 3-dimensional product array.
echo "<table border=1 cellpadding=5 cellspacing=5>";
echo "<tr>";
echo "<th>Product</th>";
echo "<th>Quantity</th>";
echo "<th>Price</th>";
echo "</tr>";

for($l=0;$l<3;$l++)
{
    echo "<tr>";
    for($r=0;$r<3;$r++)
    {

        for($c=0;$c<3;$c++)
        {
            echo "<td>".$product[$l][$r][$c]."</td>";
        }
        echo "</tr>";

    }

}
echo "</table>";