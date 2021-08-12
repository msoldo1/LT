<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kupac extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'is_deleted' => '0',
    ];

    public function racuni()
    {
        return $this->hasMany(Racun::class);
    }
}
