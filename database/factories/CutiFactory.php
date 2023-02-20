<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Http\Models\Cuti;
use App\Http\Models\User;

$factory->define(Cuti::class, function (Faker $faker) {
    return [
        'user_id' => function (array $post) {
            return User::find($post['user_id'])->id;
        },
    ];
});
