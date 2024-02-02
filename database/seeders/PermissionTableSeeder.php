<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [

        //    'role-list',
        //    'role-create',
        //    'role-edit',
        //    'role-delete',

        //    'product-list',
        //    'product-create',
        //    'product-edit',
        //    'product-delete',

        //    'item-list',
        //    'item-create',
        //    'item-edit',
        //    'item-delete',

        //    'attendance-list',
        //    'attendance-view',
        //    'attendance-create',
        //    'attendance-edit',
        //    'attendance-delete',

        //    'task-list',
        //    'task-view',
        //    'task-create',
        //    'task-edit',
        //    'task-delete',

        //    'project-list',
        //    'project-view',
        //    'project-create',
        //    'project-edit',
        //    'project-delete',

        //    'notification-list',
        //    'notification-create',
        //    'notification-edit',
        //    'notification-delete',

        //    'hiring-list',
        //    'hiring-view',
        //    'hiring-create',
        //    'hiring-edit',
        //    'hiring-delete',

        //    'employee-list',
        //    'employee-create',
        //    'employee-view',
        //    'employee-edit',
        //    'employee-delete',

        //    'report-list',
        //    'report-create',
        //    'report-view',
        //    'report-edit',
        //    'report-delete',

        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}