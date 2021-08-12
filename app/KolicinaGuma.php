<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KolicinaGuma extends Model
{
    protected $guarded = [];
    protected $attributes = [
        'is_deleted' => '0',
    ];

    public function guma()
    {
        return $this->belongsTo(Guma::class);
    }
}
