<?php

namespace App\Http\Controllers;

use App\KolicinaPlatno;
use App\Platno;
use Illuminate\Http\Request;

class kolicinaPlatnoController extends Controller
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
    public function create($platno)
    {
        $platno = Platno::find($platno);
        $kolicina = new KolicinaPlatno();

        return view('kolicinaPlatno.create', compact('platno','kolicina'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kolicina = KolicinaPlatno::create($this->validateRequest());
        $platno = Platno::find($kolicina->platno_id);
        $platno->unesenoPlatna = $platno->unesenoPlatna + $kolicina->kolicina;
        $platno->save();
        return redirect()->action(
            'PlatnoController@show', ['platno' => $platno]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KolicinaPlatno  $kolicinaPlatno
     * @return \Illuminate\Http\Response
     */
    public function show(KolicinaPlatno $kolicinaPlatno)
    {
        $kolicina = $kolicinaPlatno;
        return view('kolicinaPlatno.show',compact('kolicina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KolicinaPlatno  $kolicinaPlatno
     * @return \Illuminate\Http\Response
     */
    public function edit(KolicinaPlatno $kolicinaPlatno)
    {
        dd($kolicinaPlatno);
        return view('kolicinaPlatno.edit', compact('kolicina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KolicinaPlatno  $kolicinaPlatno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KolicinaPlatno $kolicinaPlatno)
    {
        $kolicinaPlatno->update($this->validateRequest());
        return view('kolicinaPlatno.show', compact(''));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KolicinaPlatno  $kolicinaPlatno
     * @return \Illuminate\Http\Response
     */
    public function destroy(KolicinaPlatno $kolicinaPlatno)
    {
        $kolicinaPlatno->is_deleted = '1';
        $kolicinaPlatno->save();
        $platno = Platno::find($kolicinaPlatno->platno->id);
        $platno->unesenoPlatna = $platno->unesenoPlatna - $kolicinaPlatno->kolicina;
        $platno->trenutnoPlatna = $platno->unesenoPlatno - $platno->potrosenoPlatno;
        $platno->save();
        return view('platno.show', compact('platno'));
    }

    private function validateRequest()
    {
        return request()->validate([
            'platno_id' => 'required',
            'kolicina' => 'required',
        ]);
    }
}
