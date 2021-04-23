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
            'email'=>'admin1@gmail.com',
            'password'=>bcrypt('admin')]);

        $operation->attachRole('operation_Management');

        $pharmacies = User::create([
            'name'=>'pharmacies_Management',
            'email'=>'admin2@gmail.com',
            'password'=>bcrypt('admin')]);

        $pharmacies->attachRole('pharmacies_Management');

        $pharmacovigilance = User::create([
            'name'=>'pharmacovigilance_Management',
            'email'=>'admin3@gmail.com',
            'password'=>bcrypt('admin')]);

        $pharmacovigilance->attachRole('pharmacies_Management');
    }
}
