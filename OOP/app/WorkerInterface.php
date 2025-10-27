<?php

namespace App;

interface WorkerInterface
{
    public function work();
    public function __toString();
}