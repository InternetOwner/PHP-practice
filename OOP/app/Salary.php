<?php

namespace App;

class Salary
{
    static public int $totalHours = 0;

    static public function count(array $hours){
        $arr_sum = array_sum($hours);
        self::$totalHours += $arr_sum;
        return $arr_sum;
    }
}