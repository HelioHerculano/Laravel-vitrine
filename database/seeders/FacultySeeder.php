<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("faculties")->insert(["sigla" => "FET",
        "name" => "Faculdade de Engenharia e Tecnologia",
        "contact" => "+258 875467332",
        "email" => "FET@gmail.com",
        "location" => "Av.Julious Nherere",
        "description" => "Uma faculdade cujo o foco é formar com qualidade",
       ]);
    }
}
