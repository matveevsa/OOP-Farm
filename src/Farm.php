<?php

namespace App;

class Farm
{
    protected $stable = [];

    public function __construct($animal, $count = 1)
    {
        for ($i = 0; $i < $count; $i += 1) {
            $this->stable[] = new $animal($i);
        }
    }

    public function getStable()
    {
        return $this->stable;
    }

    public function getAllSupply()
    {
        return array_reduce($this->stable, function ($acc, $animal) {
            $acc += $animal->getSupply();
            return $acc;
        }, 0);
    }
}
