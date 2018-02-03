<?php

use Illuminate\Database\Seeder;

class AdminUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 1)->create([
            'name' => 'zangles',
            'email' => 'azuresky07@gmail.com',
            'password' => bcrypt('septiembre08')
        ]);
    }
}
