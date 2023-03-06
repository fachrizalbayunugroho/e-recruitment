<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        return [
           'tanggal' => $faker -> date(),
           'isi' => $faker -> text()
  		];
    }
}
