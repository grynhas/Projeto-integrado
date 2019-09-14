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
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@videomate.com',
            'nickname' => 'adm',
            'password' => bcrypt('123456')
        ]);

        factory(User::class, 8)->create();
    }
}
