<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        //$this->call(MovieTableSeeder::class);

       // $this->call(RolesAndPermissionSeeder::class);

        $user = User::create([
            'name'          =>'Kyaw Khant Zin',
            'email'         =>'kyawkhantzin112@gmail.com',
            'password'      =>bcrypt('kyawkhantzin1201'),
            'created_at'    =>date("Y-m-d H:i:s")
        ]);
        $user->assignRole('Admin');

        //$this->call(RolesAndPermissionSeeder::class);


    }
}
