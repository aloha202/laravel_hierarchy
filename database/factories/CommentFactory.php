<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
    public function definition()
    {
        $text = fake()->realText();
        $hash = sha1($text);
        $parent = DB::table('comments')
            ->select('id', 'created_at')
            ->inRandomOrder()
            ->limit(1)
            ->first();
        $created_at = $parent ? fake()->dateTimeBetween($parent->created_at) : '2021-09-01';
        return [
            'username' => fake()->name(),
            'comment' => $text,
            'parent_id' => $parent?->id,
            'created_at' => $created_at

        ];
    }
}
