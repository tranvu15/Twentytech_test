<?php

use App\User;
use App\Models\Tag;
use App\Models\Post;
use Faker\Generator;
use App\Models\Comment;
use App\Models\Category;

$factory->define(User::class, function (Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});
