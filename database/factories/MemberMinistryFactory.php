<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Member;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MemberMinistry>
 */
class MemberMinistryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "member_id" => Member::factory(),
            "ministry_id" => rand(1,5),
            "status_id" => 1,
            "start_date" => fake()->date(),
            "end_date" => fake()->date(),
        ];
    }
}
