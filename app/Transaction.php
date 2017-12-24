<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	protected $table = 'transactions';
     protected $hidden = [
        'date', 'type_transaction_id','category_id'
    ];
    public function transactions()
    {
        return $this->hasMany('App\TypeTransaction');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function categories()
    {
        return $this->hasMany('App\Category');
    }
}
