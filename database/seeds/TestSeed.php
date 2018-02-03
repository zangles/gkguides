<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TestSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = factory(\App\User::class, 10)->create();

        $usersIds = [];
        foreach ($users as $user) {
            $usersIds[] = $user->id;
        }

        factory(\App\Guide::class, 50)->make()->each(function ($guide) use($faker, $usersIds) {

            if ($guide->type == \App\Guide::TYPE_PILOT) {
                $guide->pilot_id = $faker->randomElement(
                  [
                    'c_001',
                    'c_002',
                    'c_003',
                    'c_004',
                    'c_005',
                    'c_006',
                    'c_007',
                    'c_008',
                    'c_009',
                    'c_010',
                    'c_011',
                    'c_012'
                  ]
                );
            }
            $guide->user_id = $faker->randomElement($usersIds);
            $guide->save();
        });

    }
}
