<?php

    function func(){
        static $x = 5;
        echo $x;
        $x++;
    }

    func();
    func();
    func();
?>