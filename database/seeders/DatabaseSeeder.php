<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use App\Models\Suplier;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        
        User::create([
            'name' => 'Hadiid Andri Yulison',
            'username' => 'Hadiidandriy12',
            'email' => 'hadiidandri2000@gmail.com',
            'password' => Hash::make('123'),
        ]);

        Suplier::factory(10)->create();

       

    }
}
