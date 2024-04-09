<?php

namespace Database\Factories;

use App\Enum\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'page_id' => $this->faker->randomElement(Page::cases())->value,
            'content' => $this->faker->realTextBetween()
        ];
    }
}
