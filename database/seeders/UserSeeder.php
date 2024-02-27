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
            'nombre' => "Admin",
            'apellido' => "d",
            'tipo_documento' => "C.C",
            'documento' => "1254784125",
            'email' => "stiven21ospina@gmail.com",
            'password' => Hash::make("12345"),
            'estado' => true,
            'rol' => "administrador",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'nombre' => "John",
            'apellido' => "G",
            'tipo_documento' => "C.C",
            'documento' => "1254724125",
            'email' => "stiven22ospina@gmail.com",
            'password' => Hash::make("12345"),
            'estado' => true,
            'rol' => "administrador",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'nombre' => "Albert",
            'apellido' => "O",
            'tipo_documento' => "C.C",
            'documento' => "12547841253",
            'email' => "stiven23ospina@gmail.com",
            'password' => Hash::make("12345"),
            'estado' => true,
            'rol' => "administrador",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'nombre' => "John",
            'apellido' => "Doe",
            'tipo_documento' => "C.C",
            'documento' => "56554684",
            'email' => "stiven24ospina@gmail.com",
            'password' => Hash::make("12345"),
            'estado' => true,
            'rol' => "especialista",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'nombre' => "Andres",
            'apellido' => "Meza",
            'tipo_documento' => "C.C",
            'documento' => "1254774125",
            'email' => "stiven25ospina@gmail.com",
            'password' => Hash::make("12345"),
            'estado' => true,
            'rol' => "cliente",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
