<?php
    /**
    * helper function
    */
    function dd($input){
        var_dump($input);
        exit();
    }
    /**
    * reverse a word
    */

    function reverseWord($word){
        $arr = str_split($word);
        $len = count($arr);
        $reversed = '';
        for ($i = $len-1; $i >=0 ; --$i) {
            $reversed .= $arr[$i];
        }
        return $reversed;
    };
    /**
     * factorial
     */

    function factorial($num){
        if($num < 2){
            return 1;
        }else{
            $factorial = $num * factorial($num-1);
        }
            return $factorial;
    }
    /**
     * find lobest word in a sentence (using regexp)
     */
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
    /**
     * change letters
     */

    function letterChanges($str){
        $str = str_split($str);
        $alpha = [];
        $in = [];
        foreach (range('a','z') as $val) {
            array_push($alpha,$val);
        }
        $result = [];
        $out = preg_grep("/[^a-zA-Z]+/",$str);
        $in = preg_grep("/[a-zA-Z]+/",$str);
        $intersect = array_intersect($in,$alpha);
        foreach ($intersect as $key => $val) {
            foreach ($alpha as $k => $v) {
                if($val == $v){
                    $in[$key] = ++$v;
                }
            }
        }
        $vowels = ['a','e','i','o','u'];
        $in  =   str_replace($vowels, array_map('strtoupper', $vowels), $in);
        foreach ($in as $k => $v) {
            $result[$k] = $v;
        }
        foreach ($out as $key => $val) {
            $result[$key] = $val;
        }
        ksort($result);
        $str = implode('',$result);
        return $str;
    }
function letterCapitalize($str) {  

   $result = [];
        $split = str_split($str);
        $arr = explode(' ',$str);
        foreach ($arr as $a) {
            array_push($result,ucfirst($a));
        }
        $str = '';
        foreach ($result as $r) {
                $str .= ' ' . $r;
        }
                return $str;
            return $str; 
                         
        }
        function simpleAdding($num){
            $x = 0;
            for ($i = 1; $i <= $num; $i++) {
                $x += $i;
            }
            return $x;
        }
    function minVal($arr){
        $min = $arr[0];
        for ($i = 0; $i < count($arr); $i++) {
            if($min > $arr[$i]){
                $min = $arr[$i];
                $arr[$i] = $min;
            }
        }
        return  $min;
    }

    function maxVal($arr){
        $max = $arr[0];
        for ($i = 0; $i < count($arr); $i++) {
            if($max < $arr[$i]){
                $max = $arr[$i];
            }
        }
        return $max;
    }

    echo "Reversed word:" . reverseWord("hello world ") . "\n";
    echo "Factorial: " . factorial(5) . "\n";
    echo "Longest word is: " . longestWord('letter @after letter!!!') . "\n";
    echo "Letter changes: " . letterChanges('abde,1') . "\n";
    echo "Letter Capitalize: " . letterCapitalize('hello world') . "\n";
    echo "Simple Adding: " . simpleAdding(140) . "\n";
    echo "Miminum array value is: " . minVal([1,20,4,2,58]) . "\n";
    echo "Maximum array value is: " . maxVal([1,20,4,2,58]);

