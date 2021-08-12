<?php

namespace App\Http\Controllers;

use App\Kupac;
use Illuminate\Http\Request;

class KupacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kupci = Kupac::all();


        return view('kupac.index', compact('kupci'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kupac = new Kupac();
        return view('kupac.create', compact('kupac'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kupac::create($this->validateRequest());
        return redirect('kupci');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kupac  $kupac
     * @return \Illuminate\Http\Response
     */
    public function show(Kupac $kupac)
    {
        return view('kupac.show', compact('kupac'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kupac  $kupac
     * @return \Illuminate\Http\Response
     */
    public function edit(Kupac $kupac)
    {
        return view('kupac.edit', compact('kupac'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kupac  $kupac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kupac $kupac)
    {
        $kupac->update($this->validateRequest());
        return redirect('kupci/' . $kupac->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kupac  $kupac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kupac $kupac)
    {
        $kupac->is_deleted = '1';
        $kupac->save();

        return redirect('kupci');
    }

    private function validateRequest()
    {
        return request()->validate([
            'naziv' => 'required',
            'PDV_broj' => 'required',
            'ID_broj' => 'required'
        ]);
    }
}
