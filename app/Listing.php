<?php

namespace Listings;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    public function user()
    {
        return $this->belongsTo('Listings\User');
    }
}
