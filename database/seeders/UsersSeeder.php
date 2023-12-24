<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $user = User::create([
        'name' => 'marah', 
        'email' => 'admin@gmail.com',
        'password' => bcrypt('123456'),
        'role'=>['admin'],
     
    ]);
       
   $role = Role::create(['name' => 'Admin']);
       
   $permissions = Permission::pluck('id','id')->all();

   $role->syncPermissions($permissions);
  
   $user->assignRole([$role->id]);
    }
}

