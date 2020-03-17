<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@kardex.com',
            'password' => bcrypt('123456'),
            'tipo_usuario' => 'admin',
            'status' => 'activo',
            'activacion' => '0'
        ]);
    }
}
