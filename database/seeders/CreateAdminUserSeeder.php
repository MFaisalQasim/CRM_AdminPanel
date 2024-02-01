<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Faisal Qasim', 
            'email' => 'faisalqasim@gmail.com',
            'password' => bcrypt('faisalqasim')
        ]);

        // $user = User::create([
        //     'name' => 'Muhammad Faisal Qasim',
        //     'email' => 'mfaisalqasimtesting123@gmail.com',
        //     'password' => bcrypt('mfaisalqasimtesting123')
        // ]);

        // $role = Role::create(['name' => 'Admin']);

        // $user = User::where('email','=', 'faisalqasim@gmail.com')->get();

        $role = Role::where('name','=', 'Sub Admin')->get();

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}