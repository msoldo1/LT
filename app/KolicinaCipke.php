<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KolicinaCipke extends Model
{
    protected $guarded = [];
    protected $attributes = [
        'is_deleted' => '0',
    ];

    public function cipka()
    {
        return $this->belongsTo(Cipka::class);
    }
}
