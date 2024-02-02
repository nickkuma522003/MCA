<?php
	$a = array(1, 2, 3, 4, 5, 6, 7);
	$b = array(8, 9, 10);
	echo "printing an array";
    print_r($a);
    echo "<br>";
    echo "<br>";

    $c = array_merge($a, $b);
    echo "merging an array";
    print_r($c);
    echo "<br>";
    echo "<br>";

    array_pop($a);
    echo "delete element in an array";
    print_r($a);
    echo "<br>";
    echo "<br>";
    
    array_push($a, 12, 13, 14);
    echo "add elements in an array";
    print_r($a);
    echo "<br>";
    echo "<br>";
	
    array_reverse($a);
    echo "reversing an array";
    print_r($a);
    echo "<br>";
    echo "<br>";
	
    array_slice($a, 3, 7);
    echo "slicing an array";
    print_r($a);
    echo "<br>";
    echo "<br>";
	
    asort($a);
    echo "sorting an array in ascending order";
    print_r($a);
    echo "<br>";
    echo "<br>";
	
    rsort($a);
    echo "sorting an array in descending order";
    print_r($a);
    echo "<br>";
    echo "<br>";

    sort($a);
    echo "sorting an array";
    print_r($a);
    


	
    


?>
