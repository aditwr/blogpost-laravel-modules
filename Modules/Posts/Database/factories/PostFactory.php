<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Modules\Posts\Entities\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence(mt_rand(3,6)),
        'slug' => $faker->unique()->sentence(mt_rand(3,6)),
        'content' => $faker->paragraphs((mt_rand(4,8)), true)
    ];
});
