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
        $operation = User::create([
            'name'=>'operation_Management',
            'email'=>'adminom@gmail.com',
            'password'=>bcrypt('adminom')]);

        $operation->attachRole('operation_Management');

        $pharmacies = User::create([
            'name'=>'pharmacies_Management',
            'email'=>'adminpm@gmail.com',
            'password'=>bcrypt('adminpm')]);

        $pharmacies->attachRole('pharmacies_Management');
    }
}
