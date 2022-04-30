<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=new User();
        $admin->role_id=1;
        $admin->name="Admin";
        $admin->email="admin@gmail.com";
        $admin->password=Hash::make('admin123');
        $admin->save();

        $user=new User();
        $user->role_id=2;
        $user->name="User";
        $user->email="user@gmail.com";
        $user->password=Hash::make('user123');
        $user->save();

        $vendor=new User();
        $vendor->role_id=3;
        $vendor->name="Vendor";
        $vendor->email="vendor@gmail.com";
        $vendor->password=Hash::make('vendor123');
        $vendor->save();
    }
}
