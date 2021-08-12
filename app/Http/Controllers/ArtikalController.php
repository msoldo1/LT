<?php

namespace App\Http\Controllers;

use App\Artikal;
use App\Cipka;
use App\Etiketa;
use App\Exports\ArtikalsExport;
use App\Guma;
use App\Kutija;
use App\Platno;
use App\Rad;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ArtikalController extends Controller
{

    public function export()
    {
         Excel::store(new ArtikalsExport, 'users.xlsx');
        return 'done';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikli = Artikal::all();

        return view('artikal.index', compact( 'artikli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cipke = Cipka::all();
        $etikete = Etiketa::all();
        $gume = Guma::all();
        $kutije = Kutija::all();
        $platna = Platno::all();
        $radovi = Rad::all();
        $artikal = new Artikal();
        return view('artikal.create', compact('etikete', 'gume', 'kutije', 'platna', 'radovi', 'artikal', 'cipke'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikal = Artikal::create($this->validateRequest());
        $artikal->cijenaArtikla = $this->kalkulacije();
        $artikal->save();
        return redirect('artikli');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikal  $artikal
     * @return \Illuminate\Http\Response
     */
    public function show(Artikal $artikal)
    {
        return view('artikal.show', compact('artikal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikal  $artikal
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikal $artikal)
    {
        $etikete = Etiketa::all();
        $gume = Guma::all();
        $kutije = Kutija::all();
        $platna = Platno::all();
        $radovi = Rad::all();
        $cipke = Cipka::all();
        return view('artikal.edit', compact('etikete', 'gume', 'kutije', 'platna', 'radovi', 'artikal', 'cipke' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikal  $artikal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikal $artikal)
    {
        $artikal->update($this->validateRequest());
        $artikal->cijenaArtikla = $this->kalkulacije();
        $artikal->save();
        return redirect('artikli/' . $artikal->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikal  $artikal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikal $artikal)
    {
        $artikal->is_deleted ='1';
        $artikal->save();

        return redirect('artikli');
    }





    private function validateRequest()
    {
        return request()->validate([
            'nazivArtikla' => 'required',
            'etiketa_id' => 'required',
            'guma_id' => 'required',
            'kutija_id' => 'required',
            'platno_id' => 'required',
            'rad_id' => 'required',
            'cipka_id'=>'required',
            'cijenaArtikla' => 'required',
            'kolicinaPlatna'=>'required',
            'kolicinaGume'=>'required',
            'kolicinaCipke'=>'required',

        ]);
    }

    private function kalkulacije(){

        $etiketa = Etiketa::find(\request()->etiketa_id);
        $guma = Guma::find(\request()->guma_id);
        $kutija = Kutija::find( \request()->kutija_id);
        $platno = Platno::find( \request()->platno_id);
        $rad = Rad::find(\request()->rad_id);
        $cipka = Cipka::find(\request()->cipka_id);
        return \request()->cijenaArtikla = $etiketa->cijenaEtikete + ( $guma->cijenaGume * \request()->kolicinaGume ) + $kutija->cijenaKutije +( $cipka->cijenaCipke * \request()->kolicinaCipke )+( $platno->cijenaPlatna * \request()->kolicinaPlatna )+ $rad->cijenaRada;
    }
}
