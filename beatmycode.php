<?php
//Print to the standard output a chessboard of size N,M where N is the number of columns and M is the number of rows.
//You have to print a 0 where the board is white and a 1 otherwise.
//Index (0,0) is white and it is the top left cell in the produced output.

//The "BMC_TEST_INPUT_MAGIC" (with quotes) in the code will be replaced with the actual value of the input. It's a string in the form of "N,M".

//Sample input:
//7,4
//Sample output:
//010 "\n"
//101

function chessboard($columns,$rows){
    $arr = [];
    $len = ($columns * $rows);
    for ($i = 0; $i < $len; $i++) {
        if($i % 2 == 0){
            $arr[$i] = 0;
        }
        if($i % 2 != 0){
            $arr[$i] = 1;
        }
    }
    $result = [];
    foreach ($arr as $key => $val) {
    }
    $string = implode('',$result);
    return $string;
}
echo chessboard(8,8);
