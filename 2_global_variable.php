<?php

    $x = 5; //global scope

function func(){

    //using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}

func();

echo "<p> Variable x outside function is: $x</p>";
?>