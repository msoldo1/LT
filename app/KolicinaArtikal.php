<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KolicinaArtikal extends Model
{
    protected $guarded = [];
    protected $attributes = [
        'is_deleted' => '0',
    ];

    public function artikal()
    {
        return $this->belongsTo(Artikal::class);
    }
}
