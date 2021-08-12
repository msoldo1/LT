<?php

namespace App\Http\Controllers;

use App\Guma;
use Illuminate\Http\Request;

class GumaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gume = Guma::all();
        return view('guma.index', compact('gume'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guma = new Guma();
        return view ('guma.create',compact('guma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Guma::create($this->validateRequest());

        return redirect('gume');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guma  $guma
     * @return \Illuminate\Http\Response
     */
    public function show(Guma $guma)
    {
        $guma->trenutnoGume = $guma->unesenoGume - $guma->potrosenoGume;
        $guma->save();
        return view('guma.show', compact('guma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guma  $guma
     * @return \Illuminate\Http\Response
     */
    public function edit(Guma $guma)
    {
        return view('guma.edit', compact('guma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guma  $guma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guma $guma)
    {
        $guma->update($this->validateRequest());
        return redirect('gume/' . $guma->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guma  $guma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guma $guma)
    {
        $guma->is_deleted = '1';
        $guma->save();

        return redirect('gume');
    }

    private function validateRequest()
    {
        return request()->validate([
            'nazivGume' => 'required',
            'cijenaGume' => 'required',
        ]);
    }
}
