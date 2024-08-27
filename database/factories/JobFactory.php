<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title"      => fake()->jobTitle(),
            "salary"     => fake()->randomElement(['€35.000','€55.000', '€65.000','€75.000']),
            "location"   => 'Remote',
            "schedule"   => fake()->randomElement(['Full time', 'Part time', 'Freelance']),
            "url"        => fake()->url,
            "featured"   => false,
            'employer_id'=> Employer::factory()
        ];
    }
}
