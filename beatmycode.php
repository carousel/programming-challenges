<?php
    function output($rows,$columns){
        $pattern = '01';
        $count = ($rows * $columns) / 2;
        $str = str_repeat($pattern,$count);
        echo implode("\n", str_split($str, $columns));
    }
    output(4,7);
