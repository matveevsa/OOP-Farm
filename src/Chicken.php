<?php

namespace App;

class Chicken
{
    protected $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function say()
    {
        return 'Co Co Co!';
    }

    public function getSupply($min = 0, $max = 1)
    {
        $eggs = rand($min, $max);

        return $eggs;
    }
}
