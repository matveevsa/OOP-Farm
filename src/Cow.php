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

    public function getSupply($min = 8, $max = 12)
    {
        $milk = rand($min, $max);

        return $milk;
    }
}
