<?php

namespace Database\Seeders;

use Database\Factories\CommentFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fact = new CommentFactory();
        $fact->count(1)
            ->create(['parent_id' => null, 'comment' => fake()->realTextBetween(1000, 1500)]);

        for($i = 0; $i < 300; $i++)
        {
            $fact = null;
            $fact = new CommentFactory();
            $fact->count(1)
                ->create()
            ;
        }
    }
}
