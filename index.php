<?php

    function reverseWord($word){
        $arr = str_split($word);
        $len = count($arr);
        $reversed = '';
        for ($i = $len-1; $i >=0 ; --$i) {
            $reversed .= $arr[$i];
        }
        return $reversed;
    };

    function factorial($num){
        if($num < 2){
            return 1;
        }else{
            $factorial = $num * factorial($num-1);
        }
            return $factorial;
    }
    function longestWord($sentence){
        $clean = preg_replace("/[^a-zA-Z0-9]+/", " ", $sentence);
        $arr = explode(' ',$clean);
        $lenghts = array_map('strlen',$arr);
        $min = min($lenghts);
        $max = max($lenghts);
        $len = count($arr);
        $longest = array_filter($arr,function($arr) use ($max){
            return (strlen($arr) == $max);
        });
        $keys = [];
        for ($i = 0; $i < count($longest); $i++) {
            array_push($keys,$i);
        }
        $results = array_combine($keys,$longest)[0];
        return $results;
    }


    echo "Reversed word:" . reverseWord("hello world ") . "\n";
    echo "Factorial: " . factorial(5) . "\n";
    echo "Longest word is: " . longestWord('letter @after letter!!!');
