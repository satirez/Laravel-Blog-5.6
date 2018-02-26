<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) { 
	// el titulo  es unico con una palabra de 5 caracteres
	$title = $faker->unique()->word(5);
    return [
        'name'=> $title,
        // nombre toma la palabra faker
        'slug'=> str_slug($title),

        // y el slug toma el noombre para el slug
       
    ];
});
