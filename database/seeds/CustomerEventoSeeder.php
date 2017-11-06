<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

class CustomerEventoSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        $startDate = Carbon::createFromTimeStamp($faker->dateTimeBetween('-1 year', '+1 year')->getTimestamp());
        $pessoas = App\Customer::all();
        // Adiciona um evento para cada pessoa
        foreach ($pessoas as $pessoa) {
            DB::table('customer_evento')->insert([
                'customer_id' => $pessoa->id,
                'evento_id' => rand(1, 8),
                'created_at' => $startDate,
            ]);
        }

        foreach ($pessoas as $pessoa) {
            DB::table('customer_evento')->insert([
                'customer_id' => $pessoa->id,
                'evento_id' => rand(1, 8),
                'created_at' => $startDate,
            ]);
        }
    }

}
