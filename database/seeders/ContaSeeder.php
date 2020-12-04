<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User\Conta;

class ContaSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conta::create([
            'tipo'      => 'Comum',
        ]);

        Conta::create([
            'tipo'      => 'Logista',
        ]);
    }
}
