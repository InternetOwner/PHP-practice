<?php

namespace App;

class Developer extends \App\Worker
{

    protected string $position = "рядовой";

    public function work()
    {
        print_r("I'm developing\n");
    }
    public function __clone()
    {
        return new Developer($this->name, $this->age, $this->hours);
    }
}