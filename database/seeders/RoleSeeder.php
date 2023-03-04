<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            $role = new Role;
            $role->name = 'Admin';
            $role->description = 'Administrador del sistema';
            $role->save();        
        
    
            $role = new Role;
            $role->name = 'Luisa';
            $role->description = 'Invitado del sistema';
            $role->save();
        
    }
    
    
    
}
