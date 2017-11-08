<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

class EventUserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        $startDate = Carbon::createFromTimeStamp($faker->dateTimeBetween('-1 year', '+1 year')->getTimestamp());
        $users = App\User::all();
        // Adiciona um evento para cada pessoa
        foreach ($users as $user) {
            DB::table('event_user')->insert([
                'user_id' => $user->id,
                'event_id' => rand(1, 8),
                'created_at' => $startDate,
            ]);
        }

        foreach ($users as $user) {
            DB::table('event_user')->insert([
                'user_id' => $user->id,
                'event_id' => rand(1, 8),
                'created_at' => $startDate,
            ]);
        }
    }

}
