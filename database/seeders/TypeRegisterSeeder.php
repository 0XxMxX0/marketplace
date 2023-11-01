<?php

namespace Database\Seeders;

use App\Models\TypeRegister;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeRegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeRegister::create([
            'name' => 'Entrace'
        ]);

        TypeRegister::create([
            'name' => 'Exit'
        ]);
    }
}
