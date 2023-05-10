<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        // DB::table('users')->insert([
        //     'name' => 'Robson S Pacheco Lourenço',
        //     'email' => 'robinhosl2008@gmail.com',
        //     'password' => Hash::make('teste'),
        // ]);
    }
}
