<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->fullname = 'Claudia Arenas Sanchez';
        $user->email = 'claudiaj.arenass@autonoma.edu.co';
        $user->phone = '3042837007';
        $user->photo = 'images/no-photo.png';
        $user->password = bcrypt('admin');
        $user->role_id = 1;
        $user->save();
    
    

        $user = new User;
        $user->fullname = 'Sara Diaz';
        $user->email = 'sara@autonoma.edu.co';
        $user->phone = '3057879642';
        $user->photo = 'images/no-photo.png';
        $user->password = bcrypt('usu12');
        $user->role_id = 2;
        $user->save();


    }
}
