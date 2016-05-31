<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->truncate();
        DB::table('users')->insert([
           [
               'name' => 'Thien',
               'email' => 'thien@simapp.app',
               'password' => bcrypt('secret')
           ],
            [
                'name' => 'Uyen',
                'email' => 'mary@simapp.app',
                'password' => bcrypt('secret')
            ],
        ]);
    }
}
