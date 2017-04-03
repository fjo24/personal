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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Tipo_docs::class, function (Faker\Generator $faker) {
    return [
        'codigo' => str_random(5),
        'nombre' => str_random(10),
    ];
});

$factory->define(App\Position::class, function (Faker\Generator $faker) {
    return [
        'name' => str_random(10),
        'condicion' => rand(0,1),
    ];
});

$factory->define(App\Personal::class, function (Faker\Generator $faker) use ($factory) {
    return [
        'FIRST_NAME' => str_random(5),
        'SECOND_NAME' => str_random(5),
        'first_LAST_NAME' => str_random(5),
        'SECOND_LAST_NAME' => str_random(5),
        'DATE_OF_BIRTH' => date('yyyy/mmm/dd'),
        'SEX'=> array_rand(['M','F']),
        'EMPLOYEE_NUMBER' => random_int(1, 100),
        'EFFECTIVE_START_DATE' => date('yyyy/mmm/dd'),
        'EFFECTIVE_END_DATE' => date('yyyy/mmm/dd'),
        'SALARY' => random_int(1, 100),
        'SOLD_MIN' => random_int(1, 100),
        'DISCCOUNT' => random_int(1, 100),
        'EMAIL_ADDRESS' => str_random(5).'@gmail.com',
        'COUNTRY' => str_random(50),
        'ADDRESS' => str_random(50),
        'TELEF1' => random_int(17645, 18456),
        'TELEF2' => random_int(4567, 56745),
        'ADDRESS' => str_random(50),
        'idtipo_doc' => $factory->create(App\Tipo_docs::class)->id,
        'idposition' => $factory->create(App\Position::class)->id,
    ];
});