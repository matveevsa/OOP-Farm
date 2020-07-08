<?php

$autoloadPath = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
} else {
    exit;
}

use App\Cow;
use App\Chicken;
use App\Farm;

$cowFarm = new Farm(Cow::class, 10);
$chickenFarm = new Farm(Chicken::class, 20);

$milk = $cowFarm->getAllSupply();
$eggs = $chickenFarm->getAllSupply();

print_r("Milk: {$milk}\nEggs: {$eggs}\n");
