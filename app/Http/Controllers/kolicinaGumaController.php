<?php

namespace App\Http\Controllers;

use App\Guma;
use App\KolicinaGuma;
use App\Platno;
use Illuminate\Http\Request;

class kolicinaGumaController extends Controller
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
    public function create($guma)
    {
        $guma = Guma::find($guma);
        $kolicina = new KolicinaGuma();

        return view('kolicinaGuma.create', compact('guma','kolicina'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kolicina = KolicinaGuma::create($this->validateRequest());
        $guma = Guma::find($kolicina->guma_id);
        $guma->unesenoGume = $guma->unesenoGume + $kolicina->kolicina;
        $guma->trenutnoGume = $guma->unesenoGume - $guma->potrosenoGume;
        $guma->save();
        return redirect()->action(
            'GumaController@show', ['guma' => $guma]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KolicinaGuma  $kolicinaGuma
     * @return \Illuminate\Http\Response
     */
    public function show(KolicinaGuma $kolicinaGuma)
    {
        $kolicina = $kolicinaGuma;
        return view('kolicinaGuma.show',compact('kolicina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KolicinaGuma  $kolicinaGuma
     * @return \Illuminate\Http\Response
     */
    public function edit(KolicinaGuma $kolicinaGuma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KolicinaGuma  $kolicinaGuma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KolicinaGuma $kolicinaGuma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KolicinaGuma  $kolicinaGuma
     * @return \Illuminate\Http\Response
     */
    public function destroy(KolicinaGuma $kolicinaGuma)
    {
        $kolicinaGuma->is_deleted = '1';
        $kolicinaGuma->save();
        $guma = Guma::find($kolicinaGuma->guma->id);
        $guma->unesenoGume = $guma->unesenoGume - $kolicinaGuma->kolicina;
        $guma->save();
        return view('guma.show', compact('guma'));
    }
    private function validateRequest()
    {
        return request()->validate([
            'guma_id' => 'required',
            'kolicina' => 'required',
        ]);
    }

}
