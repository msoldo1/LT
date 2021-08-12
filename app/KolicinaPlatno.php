<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KolicinaPlatno extends Model
{
    protected $guarded = [];
    protected $attributes = [
        'is_deleted' => '0',
    ];

    public function platno()
    {
        return $this->belongsTo(Platno::class);
    }
}
