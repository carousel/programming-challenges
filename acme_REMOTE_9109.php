<?php
    /**
     * SelectionSort algorithm
     * O(n^2)
     */
    function selectionSort($arr){
        $count = count($arr);
        for ($i = 0; $i < $count; $i++) {
            $iMin = $i;
            for ($j = $i + 1; $j < $count; $j++) {
                if($arr[$j] < $arr[$i]){
                    $iMin = $j;
                }
            }
            $temp = $arr[$i];
            $arr[$i] = $arr[$iMin];
            $arr[$iMin] = $temp;
        }
        return $arr;
    }
    $selectionSort = selectionSort([4,17,22,8,100]);
    echo 'Selection Sort:' . "\t";
    for ($i = 0; $i < count($selectionSort); $i++) {
        echo $selectionSort[$i] . ", ";
    }
    echo "\n";
    /**
     * BubbleSort algorithm
     * O(n^2)
     */
    function bubbleSort($arr){
        $count = count($arr);
        for ($i = 0; $i < $count; $i++) {
            for ($j = $i; $j < $count - 1; $j++) {
                if($arr[$i] > $arr[$j + 1]){
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
        return $arr;
    }
    $bubbleSort = bubbleSort([4,17,22,8,100]);
    echo 'Bubble Sort:' . "\t";
    foreach ($bubbleSort as $bs) {
        echo $bs . ", ";
    }
    echo "\n";
    /**
     * Insertion Sort
     * O(n^2)
     */
    function insertionSort($arr){
        for ($i = 1; $i <= count($arr) - 1; $i++) {
            $val = $arr[$i];
            $hole = $i;
            while ($hole > 0 && $arr[$hole - 1] > $val) {
                //echo $arr[$hole] . "\t";
                $arr[$hole] = $arr[$hole - 1];
                //echo $arr[$hole] . "\n";
                $hole = $hole - 1;
            }
            $arr[$hole] = $val;
        }
        return $arr;
    }
    $insertionSort = insertionSort([4,17,22,8,100]);
    echo 'Insertion Sort:' . "\t";
    foreach ($insertionSort as $bs) {
        echo $bs . ", ";
    }
    echo "\n";


