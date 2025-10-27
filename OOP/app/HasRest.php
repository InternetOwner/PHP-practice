<?php

namespace App;

trait HasRest
{
    public function rest()
    {
        print_r("Chillin\n");
    }
    public function __toString()
    {
        return "Строка\n";
    }
    public function __destruct(){
        print_r(str_repeat("ERROR\t", 10000)."\n");
    }

    public function __call($name, $arguments)
    {
        $repeatTimes = isset($arguments[0]) ? $arguments[0] : 1;
        print_r(str_repeat("Why?\t", $repeatTimes)."\n");
    }
    public function __invoke($a)
    {
        print_r($a."\n");
    }

    public function __debugInfo()
    {
        return ["TOP SECRET"];
    }
}