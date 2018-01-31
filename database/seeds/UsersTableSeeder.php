<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Denis Obote',
                'email' => 'denisobote256@gmail.com',
                'password' => bcrypt('admin')
            ]


        ];

        foreach ($users as $user){
            \App\User::create($user);
        }
    }
}
