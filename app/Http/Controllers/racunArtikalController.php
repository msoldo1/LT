<?php

namespace App\Http\Controllers;

use App\Artikal;
use App\Racun;
use App\racunArtikal;
use Illuminate\Http\Request;

class racunArtikalController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($racun)
    {
        $racun = Racun::find($racun);
        $artikli = Artikal::all();
        return view ('racunArtikal.create',compact('artikli', 'racun'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\racunArtikal  $racunArtikal
     * @return \Illuminate\Http\Response
     */
    public function show(racunArtikal $racunArtikal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\racunArtikal  $racunArtikal
     * @return \Illuminate\Http\Response
     */
    public function edit(racunArtikal $racunArtikal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\racunArtikal  $racunArtikal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, racunArtikal $racunArtikal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\racunArtikal  $racunArtikal
     * @return \Illuminate\Http\Response
     */
    public function destroy(racunArtikal $racunArtikal)
    {
        //
    }
}
