<?php

namespace App\Http\Controllers;

use App\Cipka;
use App\KolicinaCipke;
use Illuminate\Http\Request;

class kolicinaCipkeController extends Controller
{

    public function create($cipka)
    {
        $cipka = Cipka::find($cipka);
        $kolicina = new KolicinaCipke();

        return view('kolicinaCipke.create', compact('cipka','kolicina'));
    }


    public function store(Request $request)
    {
        $kolicina = KolicinaCipke::create($this->validateRequest());
        $cipka = Cipka::find($kolicina->cipka_id);
        $cipka->unesenoCipke = $cipka->unesenoCipke + $kolicina->kolicina;
        $cipka->trenutnoCipke = $cipka->unesenoCipke - $cipka->potrosenoCipke;
        $cipka->save();
        return redirect()->action(
            'CipkaController@show', ['cipka' => $cipka]
        );
    }


    public function show(KolicinaCipke $kolicinaCipke)
    {
        $kolicina = $kolicinaCipke;
        return view('kolicinaCipke.show',compact('kolicina'));
    }

    public function destroy(KolicinaCipke $kolicinaCipke)
    {
        $kolicinaCipke->is_deleted = '1';
        $kolicinaCipke->save();
        $cipka = Cipka::find($kolicinaCipke->cipka->id);
        $cipka->unesenoCipke = $cipka->unesenoCipke - $kolicinaCipke->kolicina;
        $cipka->save();
        return view('cipka.show', compact('cipka'));
    }

    private function validateRequest()
    {
        return request()->validate([
            'cipka_id' => 'required',
            'kolicina' => 'required',
        ]);
    }
}
