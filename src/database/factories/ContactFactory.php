<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last-name' => $this->faker->lastName,
            'first-name' => $this->faker->firstName,
            'gender' => $this->faker->numberBetween(1, 2),
            'email' => $this->faker->safeEmail,
            'postcode' => $this->faker->postcode,
            'address' => $this->faker->city,
            'building_name' => $this->faker->word,
            'opinion' => $this->faker->text(120)
        ];
    }
}
