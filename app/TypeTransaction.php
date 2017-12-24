<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeTransaction extends Model
{
	protected $table = 'type_transactions';
      protected $fillable = [
        'name', 'description'
    ];
    public function transactions()
    {
        return $this->hasOne('App\Transaction');
    }
}
