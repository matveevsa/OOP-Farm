<?php

namespace App;

class Cow
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
        return 'Mooooo!';
    }

    public function getSupply()
    {
        $egg = rand(8, 12);

        return $egg;
    }
}