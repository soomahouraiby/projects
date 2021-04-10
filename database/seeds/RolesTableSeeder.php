<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $operation = Role::create([
            'name'=>'operation_Management',
            'display_name'=>'operation Management',
            'description'=>'can do anything in the project'
        ]);
    }
}
