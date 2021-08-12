<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikal extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'etiketa_id' => 1,
        'guma_id' => 1,
        'kutija_id'=> 1,
        'platno_id'=> 1,
        'rad_id'=> 1,
        'cipka_id'=>1,
        'is_deleted'=> '0'
    ];

    public function etiketa()
    {
        return $this->belongsTo(Etiketa::class);
    }

    public function guma()
    {
        return $this->belongsTo(Guma::class);
    }

    public function cipka()
    {
        return $this->belongsTo(Cipka::class);
    }

    public function kutija()
    {
        return $this->belongsTo(Kutija::class);
    }

    public function platno()
    {
        return $this->belongsTo(Platno::class);
    }

    public function rad()
    {
        return $this->belongsTo(Rad::class);
    }

    public function kolicine()
    {
        return $this->hasMany(KolicinaArtikal::class);
    }

    public function racuni()
    {
        return $this->belongsToMany(Racun::class,'racuns_artikals');
    }
}
