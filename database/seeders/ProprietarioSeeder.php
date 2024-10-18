<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProprietarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table("proprietario")->insert(
            [
                'razao_social' => Str::random(20),
                'CNPJ'=> Str::random(14),
                'email'=> Str::random(12).'@example.com',
                'numero_telefone'=> 999999999,
                'ddd'=> 34,
            ]
        );
}
}