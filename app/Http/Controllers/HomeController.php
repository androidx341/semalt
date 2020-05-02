<?php

namespace App\Http\Controllers;

use App\Helpers\CommonHelper;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome', [
            'userMaxPrice' => CommonHelper::getUserMaxPrice(),
            'eventNoBids' => CommonHelper::getEventWithNoBids(),
            'threeBidsEvent' => CommonHelper::getEventWithThreeBids(),
            'maxBidsEvent' => CommonHelper::getEventWithMaxBids(),
        ]);
    }

    public function task2()
    {
        return view('task2');
    }

    public function task3()
    {
        $inputString = 'This server has 386 GB RAM and 500GB storage';

        preg_match_all('/\d+/', $inputString, $digits);

        return view('task3', [
            'digits' => $digits[0] ?? []
        ]);
    }

    public function task4()
    {
        $a = [1,2,3,4,5];
        $b = 'Hello world';

        $a[] = $b;
        $b = $a;

        $a = array_pop($b);

        return view('task4', [
            'a' => $a,
            'b' => $b
        ]);
    }
}
