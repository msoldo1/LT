<?php

namespace App\Http\Controllers;

use App\Artikal;
use App\Kupac;
use App\Racun;
use Illuminate\Http\Request;

class RacunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $racuni = Racun::all();
        return view('racun.index', compact('racuni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kupci = Kupac::all();
        $racun = new Racun();
        return view ('racun.create',compact('racun', 'kupci'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $racun = Racun::create($this->validateRequest());
        $racun->save();
        return view('racun.show', compact('racun'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Racun  $racun
     * @return \Illuminate\Http\Response
     */
    public function show(Racun $racun)
    {
        return view('racun.show', compact('racun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Racun  $racun
     * @return \Illuminate\Http\Response
     */
    public function edit(Racun $racun)
    {
        $kupci = Kupac::all();
        return view('racun.edit', compact( 'kupci', 'racun' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Racun  $racun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Racun $racun)
    {
        $racun->update($this->validateRequest());
        $racun->save();
        return redirect('racuni/' . $racun->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Racun  $racun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Racun $racun)
    {
        $racun->is_deleted ='1';
        $racun->save();

        return redirect('racun');
    }

    private function validateRequest()
    {
        return request()->validate([
            'kupac_id' => 'required',
        ]);
    }
}
