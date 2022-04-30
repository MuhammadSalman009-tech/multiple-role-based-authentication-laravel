<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=new Role();
        $admin->name="Admin";
        $admin->save();

        $user=new Role();
        $user->name="User";
        $user->save();

        $vendor=new Role();
        $vendor->name="Vendor";
        $vendor->save();
    }
}
