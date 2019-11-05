<?php
# @Date:   2019-10-29T16:26:18+00:00
# @Last modified time: 2019-10-29T21:53:23+00:00




use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'Adam Rossiter';
        $admin->email = 'admin@bookstore.ie';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);


        $user = new User();
        $user->name = 'John Jones';
        $user->email = 'JohnJ@bookstore.ie';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
