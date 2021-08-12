<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Racun extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'kupac_id' => 1,
        'is_deleted' => '0',
    ];

    public function kupac()
    {
        return $this->belongsTo(Kupac::class);
    }


}
