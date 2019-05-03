<?php

use App\Models\Objects;
use Faker\Generator as Faker;

$factory->define(Objects::class, function (Faker $faker) {
    $name = $faker->sentence(random_int(3, 8), true);
    
    $data = [
        'name' => $name,
        'users_id' => random_int(1, 11),
        'year' => 2019,
        'mounth' => random_int(01, 12),
        'status' => 1,
    ];
    return $data;
});