<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutualfund extends Model
{
    //
    protected $fillable=[
        'customer_id',
        'shares',
        'funds',
        'shareperfund',
        'market_value',
        'total_fund',
        'percent_fund',
        'reporting_date'

    ];
    
    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}

