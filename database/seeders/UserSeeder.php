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
            'lastname' => "d",
            'type_document' => "C.C",
            'document' => "1254784125",
            'age' => "19",
            'sex' => "Hombre",
            'email' => "stiven21ospina@gmail.com",
            'password' => Hash::make("12345"),
            'role' => "administrador",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => "John",
            'lastname' => "G",
            'type_document' => "C.C",
            'document' => "1254724125",
            'age' => "19",
            'sex' => "Hombre",
            'email' => "stiven22ospina@gmail.com",
            'password' => Hash::make("12345"),
            'role' => "administrador",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => "Albert",
            'lastname' => "O",
            'type_document' => "C.C",
            'document' => "12547841253",
            'age' => "19",
            'sex' => "Hombre",
            'email' => "stiven23ospina@gmail.com",
            'password' => Hash::make("12345"),
            'role' => "administrador",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => "John",
            'lastname' => "Doe",
            'type_document' => "C.C",
            'document' => "56554684",
            'age' => "19",
            'sex' => "Hombre",
            'email' => "stiven24ospina@gmail.com",
            'password' => Hash::make("12345"),
            'role' => "especialista",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => "Andres",
            'lastname' => "Meza",
            'type_document' => "C.C",
            'document' => "1254774125",
            'age' => "19",
            'sex' => "Hombre",
            'email' => "stiven25ospina@gmail.com",
            'password' => Hash::make("12345"),
            'role' => "cliente",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
