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

    public function getSupply()
    {
        $egg = rand(0, 1);

        return $egg;
    }
}
