<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function ($faker) {
    return [
        'user_id' => rand(1, 10),
        'title' => $faker->sentence,
        'content' => $faker->paragraph(rand(3, 6)),
        'page_views' => rand(0, 200),
        'created_at' => $faker->dateTimeBetween('-3 months', 'now')
    ];
});

$factory->define(App\Comment::class, function ($faker) {
    return [
        'post_id' => rand(1, 30),
        'name' => $faker->name,
        'email' => $faker->email,
        'content' => $faker->paragraph(rand(3, 6)),
        'created_at' => $faker->dateTimeBetween('-3 months', 'now')
    ];
});

$factory->define(App\Tag::class, function ($faker) {
    return [
        'title' => $faker->word,
    ];
});