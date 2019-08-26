<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'name' => 'Administrador',
            'email' => 'admin@videomate.com',
            'nickname' => 'admin',
            'password' => bcrypt('123456')
        ]);
    }
}
