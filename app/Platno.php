<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platno extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'is_deleted' => '0',
    ];

    public function artikli()
    {
        return $this->hasMany(Artikal::class);
    }

    public function kolicine()
    {
        return $this->hasMany(KolicinaPlatno::class);
    }
}
