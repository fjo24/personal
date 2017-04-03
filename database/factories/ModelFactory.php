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
        'codigo' => $faker->word,
        'nombre' => $faker->word,
    ];
});

$factory->define(App\Position::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'condicion' => rand(0, 1),
    ];
});

$factory->define(App\Personal::class, function (Faker\Generator $faker) use ($factory) {
    return [
        'FIRST_NAME' => $faker->firstName,
        'SECOND_NAME' => $faker->firstName,
        'first_LAST_NAME' => $faker->lastName,
        'SECOND_LAST_NAME' => $faker->lastName,
        'DATE_OF_BIRTH' => date('yyyy/mmm/dd'),
        'SEX' => array_rand(['M', 'F']),
        'EMPLOYEE_NUMBER' => random_int(1, 100),
        'EFFECTIVE_START_DATE' => date('yyyy/mmm/dd'),
        'EFFECTIVE_END_DATE' => date('yyyy/mmm/dd'),
        'SALARY' => random_int(1, 100),
        'SOLD_MIN' => random_int(1, 100),
        'DISCCOUNT' => random_int(1, 100),
        'EMAIL_ADDRESS' => $faker->email,
        'COUNTRY' => $faker->country,
        'TELEF1' => $faker->phoneNumber,
        'TELEF2' => $faker->phoneNumber,
        'ADDRESS' => $faker->address,
        'idtipo_doc' => $factory->create(App\Tipo_docs::class)->id,
        'idposition' => $factory->create(App\Position::class)->id,
    ];
});

$factory->define(App\Per_ventas::class, function (Faker\Generator $faker) use ($factory) {
    return [

        'date' => $faker->date(),
        'amount' => $faker->randomDigit,
        'invoice_id' => $faker->randomDigit,
        'status' => $faker->randomElement(['v', 'c']),
        'personal_id' => $factory->create(App\Personal::class)->id,

    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('admin')
    ];
});
