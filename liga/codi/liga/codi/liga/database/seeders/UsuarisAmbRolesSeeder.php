<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsuarisAmbRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $llista_usuaris = [
            [
                'name' => 'leniad',
                'role' => 'admin',
                'email' => 'leinad@fjeclot.net',
                'password' => Hash::make('fjeClot25#')
            ],
            [
                'name' => 'aletse',
                'role' => 'basic',
                'email' => 'aletse@fjeclot.net',
                'password' => Hash::make('clotFje25@')
            ],
        ];
        DB::table('users')->insert($llista_usuaris);
    }
}
