<?php

namespace Database\Seeders;

use Database\Factories\CompanyFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fak = new CompanyFactory();
        $fak->count(3)
            ->create([
                 'parent_id' => null
            ]);

        for($i = 0; $i < 500; $i++)
        {
            $fak = null;
            $fak = new CompanyFactory();

            $fak->count(1)
                ->create()
            ;
        }
    }
}
