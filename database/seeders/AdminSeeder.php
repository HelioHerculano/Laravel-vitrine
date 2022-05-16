<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert(["name" => "admin",
                                     "email" => "admin@gmail.com",
                                     "admin" => 1,
                                     "cta" => 0,
                                     "manager" => 0,
                                     "teacher" => 0,
                                     "password" => Hash::make("adminadmin")
                                    ]);

                                    DB::table("users")->insert(["name" => "Helio",
                                     "email" => "heliomucumbi@gmail.com",
                                     "admin" => 0,
                                     "cta" => 1,
                                     "manager" => 1,
                                     "teacher" => 0,
                                     "password" => Hash::make("adminadmin")
                                    ]);

                                    DB::table("users")->insert(["name" => "Adleson",
                                     "email" => "Adleson@gmail.com",
                                     "admin" => 0,
                                     "cta" => 1,
                                     "manager" => 0,
                                     "teacher" => 0,
                                     "password" => Hash::make("adminadmin")
                                    ]);

                                    
                                    DB::table("users")->insert(["name" => "Claudia",
                                     "email" => "claudia@gmail.com",
                                     "admin" => 0,
                                     "cta" => 0,
                                     "manager" => 0,
                                     "teacher" => 1,
                                     "password" => Hash::make("adminadmin")
                                    ]);

    }
}
