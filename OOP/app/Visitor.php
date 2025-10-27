<?php

namespace App;

class Visitor
{
    public int $age;
    public string $name;
    public array $hours;

    public function visit()
    {
        print_r("I'm visiting\n");
    }

}