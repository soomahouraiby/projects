<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'operation_Management',
            'email'=>'operation@gmail.com',
            'password'=>bcrypt('operation')]);

        $user->attachRole('operation_Management');

        $user1 = User::create([
            'name'=>'opManagement',
            'email'=>'opion@gmail.com',
            'password'=>bcrypt('operation')]);

        $user1->attachRole('operation_Management');
    }
}
