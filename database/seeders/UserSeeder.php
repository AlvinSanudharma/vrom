<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Schema::disableForeignKeyConstraints();

        User::truncate();

        $users = [
            [
                'name' => 'admin', 
                'email' => 'admin@email.com', 
                'password' => bcrypt('password'), 
                'roles' => 'ADMIN', 
            ],
        ];

        User::insert($users);

        Schema::enableForeignKeyConstraints();
    }
}
