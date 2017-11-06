<?php
use App\Evento as Ev;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
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
