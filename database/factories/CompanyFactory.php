<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $company = DB::table('companies')
            ->select('id')
            ->inRandomOrder()
            ->limit(1)
            ->first();
        return [
            'name' => fake()->company(),
            'parent_id' => $company?->id
        ];
    }
}
