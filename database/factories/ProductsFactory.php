<?php

use Faker\Generator as Faker;

use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'short' => $faker->text(140),
        'body' => $faker->text(500),
    ];
});
