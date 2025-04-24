<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Type;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

            'name' => $this->faker->word,
            'category' => $this->faker->randomElement($array = array ('frontend','backend','database', 'other')),
            'proficiency' => $this->faker->randomElement($array = array ('beginner','intermediate','advanced')),
            'description' => $this->faker->sentence,
        ];
    }
}
