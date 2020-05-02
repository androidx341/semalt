<?php

use App\Bid;
use App\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bids')->delete();
        DB::table('events')->delete();

        factory(Event::class, 10)->create()->each(function (Event $event) {
            $event->bids()->saveMany(factory(Bid::class, rand(0, 4))->make());
        });

        factory(Event::class, 1)->create();
    }
}
