<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    public function subscription()
    {
    	return $this->hasMany('App\Subscription');
    }
}
