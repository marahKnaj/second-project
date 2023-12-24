<?php

  

namespace Database\Seeders;

  

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

           'role-list',

           'role-create',

           'role-edit',

           'role-delete',
           'role-show',

           'User Mangement',
           'edit User',
           'creat User',
          'show User',
           'delete User',
           'inex User',

           'Appoinment Mangement',
           'create Appoinment',
           'delete Appoinment',
           'show Appoinment',
           'edit Appoinment', 

    

        ];

      
    
        foreach ($permissions as $permission) {

             Permission::create(['name' => $permission]);

        }

    }

}
