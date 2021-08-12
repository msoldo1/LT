<?php

namespace App\Http\Controllers;

use App\Artikal;
use App\Guma;
use App\KolicinaArtikal;
use App\Platno;
use Illuminate\Http\Request;

class kolicinaArtikalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($artikal)
    {
        $artikal = Artikal::find($artikal);
        $kolicina = new KolicinaArtikal();

        return view('kolicinaArtikal.create', compact('artikal','kolicina'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kolicina = KolicinaArtikal::create($this->validateRequest());
        $artikal = Artikal::find($kolicina->artikal_id);
        $artikal->unesenoArtikal = $artikal->unesenoArtikal + $kolicina->kolicina;
        $platno = Platno::find($artikal->platno->id);
        $guma = Guma::find($artikal->guma->id);
        $platno->potrosenoPlatna = $platno->potrosenoPlatna + ($artikal->kolicinaPlatna * $kolicina->kolicina);
        $platno->save();
        $guma->potrosenoGume = $guma->potrosenoGume + ($artikal->kolicinaGume * $kolicina->kolicina);
        $guma->save();
        $artikal->save();
        return redirect()->action(
            'ArtikalController@show', ['artikal' => $artikal]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KolicinaArtikal  $kolicinaArtikal
     * @return \Illuminate\Http\Response
     */
    public function show(KolicinaArtikal $kolicinaArtikal)
    {

        $kolicina = $kolicinaArtikal;
        return view('kolicinaArtikal.show',compact('kolicina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KolicinaArtikal  $kolicinaArtikal
     * @return \Illuminate\Http\Response
     */
    public function edit(KolicinaArtikal $kolicinaArtikal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KolicinaArtikal  $kolicinaArtikal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KolicinaArtikal $kolicinaArtikal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KolicinaArtikal  $kolicinaArtikal
     * @return \Illuminate\Http\Response
     */
    public function destroy(KolicinaArtikal $kolicinaArtikal)
    {
        $kolicinaArtikal->is_deleted = '1';
        $kolicinaArtikal->save();
        $artikal = Artikal::find($kolicinaArtikal->artikal_id);
        $platno = Platno::find($artikal->platno->id);
        $guma = Guma::find($artikal->guma->id);
        $platno->potrosenoPlatna = $platno->potrosenoPlatna - ($artikal->kolicinaPlatna * $kolicinaArtikal->kolicina);
        $platno->save();
        $guma->potrosenoGume = $guma->potrosenoGume - ($artikal->kolicinaGume * $kolicinaArtikal->kolicina);
        $guma->save();
        $artikal->unesenoArtikal = $artikal->unesenoArtikal - $kolicinaArtikal->kolicina;
        $artikal->save();
        return view('artikal.show', compact('artikal'));
    }

    private function validateRequest()
    {
        return request()->validate([
            'artikal_id' => 'required',
            'kolicina' => 'required',
        ]);
    }
}
