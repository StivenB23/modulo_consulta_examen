<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'lastname' => "",
            'type_document' => "N.A",
            'document' => "",
            'age' => "NA",
            'sex' => "NA",
            'email' => "stiven23ospina@gmail.com",
            'password' => Hash::make("12345"),
            'role' => "administrador",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // DB::table('users')->insert([
        //     'name' => "John",
        //     'lastname' => "G",
        //     'type_document' => "CC",
        //     'document' => "1254724125",
        //     'age' => "19",
        //     'sex' => "H",
        //     'email' => "stiven22ospina@gmail.com",
        //     'password' => Hash::make("12345"),
        //     'role' => "administrador",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('users')->insert([
        //     'name' => "Albert",
        //     'lastname' => "O",
        //     'type_document' => "CC",
        //     'document' => "12547841253",
        //     'age' => "19",
        //     'sex' => "H",
        //     'email' => "stiven23ospina@gmail.com",
        //     'password' => Hash::make("12345"),
        //     'role' => "administrador",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('users')->insert([
        //     'name' => "John",
        //     'lastname' => "Doe",
        //     'type_document' => "CC",
        //     'document' => "56554684",
        //     'age' => "19",
        //     'sex' => "H",
        //     'email' => "stiven24ospina@gmail.com",
        //     'password' => Hash::make("12345"),
        //     'role' => "especialista",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('users')->insert([
        //     'name' => "Andres",
        //     'lastname' => "Meza",
        //     'type_document' => "CC",
        //     'document' => "1254774125",
        //     'age' => "19",
        //     'sex' => "H",
        //     'email' => "stiven25ospina@gmail.com",
        //     'password' => Hash::make("12345"),
        //     'role' => "cliente",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
    }
}
