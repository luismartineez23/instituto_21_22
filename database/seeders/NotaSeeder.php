<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Nota;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nota::truncate();

        Nota::factory()
            ->count(100)
            ->create();
    }
}
