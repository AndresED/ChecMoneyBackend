<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
	protected $table = 'accounts';
    protected $fillable = [
        'name', 'balance'
    ];
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }
}
