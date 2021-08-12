<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class racunArtikal extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'artikal_id' => 1,
        'is_deleted' => '0',
    ];

    public function artikli()
    {
        return $this->belongsTo(Artikal::class);
    }

    public function racun()
    {
        return $this->belongsTo(Racun::class);
    }
}
