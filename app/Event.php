<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    public $timestamps = false;

    public function bids()
    {
        return $this->hasMany(Bid::class, 'id_event', 'id');
    }
}
