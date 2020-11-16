<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => App\User::inRandomOrder()->first()->id,
        'contents' => $faker->realText(30),
    ];
});
