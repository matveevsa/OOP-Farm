<?php

namespace App;

class Farm
{
    protected $stable = [];

    public function __construct($animal, $count = 1)
    {
        for ($i = 0; $i < $count; $i += 1) {
            $this->stable[] = new $animal($i + 1);
        }
    }

    public function getStable()
    {
        return $this->stable;
    }

    public function getCountSupply()
    {
        //
    }
}
