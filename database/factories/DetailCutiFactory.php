<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\DetailCuti;
use App\Http\Models\Cuti;
use Faker\Generator as Faker;

$factory->define(DetailCuti::class, function (Faker $faker) {
    return [
        'cuti_id' => function (array $post) {
            return Cuti::find($post['cuti_id'])->id;
        },
        'tanggal_cuti' => $faker->dateTimeThisMonth(),
        'status' => $faker->numberBetween(0,2),
    ];
});
