<?php
use App\Event as Ev;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ev::truncate();
        factory(Ev::class)->times(8)->create();
    }
}
