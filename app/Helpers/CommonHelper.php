<?php


namespace App\Helpers;


use App\Bid;
use App\Event;
use Illuminate\Support\Facades\DB;

class CommonHelper
{
    public static function getUserMaxPrice()
    {
        return Bid::query()
            ->orderBy('price', 'desc')
            ->limit(1)
            ->value('name');
    }

    public static function getEventWithNoBids()
    {
        return Event::query()
            ->leftJoin('bids', 'events.id', '=', 'bids.id_event')
            ->whereNull('bids.id')
            ->value('caption');
    }

    public static function getEventWithThreeBids()
    {
         $countBids = Bid::query()
            ->select(['id_event', DB::raw('COUNT(id) as count_bids' )])
            ->groupBy('id_event')
            ->having('count_bids','>', 3);

        return Event::query()
            ->joinSub($countBids, 'countBids', 'countBids.id_event', '=', 'events.id')
            ->limit(1)
            ->value('caption');
    }

    public static function getEventWithMaxBids()
    {
        $maxBids = Bid::query()
            ->select(['id_event', DB::raw('COUNT(id) as count_bids' )])
            ->groupBy('id_event')
            ->orderBy('count_bids', 'desc')
            ->limit(1);

        return Event::query()
            ->joinSub($maxBids, 'maxBids', 'maxBids.id_event', '=', 'events.id')
            ->limit(1)
            ->value('caption');
    }
}
