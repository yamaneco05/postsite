<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'post_id' => App\Post::inRandomOrder()->first()->id,
        'icon' => public_path('image/test.jpg')
    ];
});
