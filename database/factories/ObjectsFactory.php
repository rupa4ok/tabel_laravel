<?php

use App\Models\Objects;
use Faker\Generator as Faker;

$factory->define(Objects::class, function (Faker $faker) {
    $name = $faker->sentence(random_int(3, 8), true);
    $txt = $faker->realText(random_int(1000, 4000));
    $isPublished = random_int(1, 5) > 1;
    $createdAt = $faker->dateTimeBetween('-2 mounth', '-3 mounth');
    
    $data = [
        'name' => $name,
        'users_id' => random_int(1, 11),
        'year' => 2019,
        'mounth' => random_int(01, 12),
        'status' => 1,
        'published_at' => $isPublished ? $faker->dateTimeBetween('-1 day', '-1 mounth') : null,
        'created_at' => $createdAt,
        'updated_at' => $createdAt
    ];
    return $data;
});