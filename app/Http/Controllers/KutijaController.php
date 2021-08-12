<?php

namespace App\Http\Controllers;

use App\Kutija;
use Illuminate\Http\Request;

class KutijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kutije = Kutija::all();
        return view('kutija.index', compact('kutije'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kutija = new Kutija();
        return view ('kutija.create',compact('kutija'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kutija::create($this->validateRequest());

        return redirect('kutije');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kutija  $kutija
     * @return \Illuminate\Http\Response
     */
    public function show(Kutija $kutija)
    {
        return view('kutija.show', compact('kutija'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kutija  $kutija
     * @return \Illuminate\Http\Response
     */
    public function edit(Kutija $kutija)
    {
        return view('kutija.edit', compact('kutija'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kutija  $kutija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kutija $kutija)
    {
        $kutija->update($this->validateRequest());
        return redirect('kutije/' . $kutija->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kutija  $kutija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kutija $kutija)
    {
        $kutija->is_deleted = '1';
        $kutija->save();

        return redirect('kutije');
    }

    private function validateRequest()
    {
        return request()->validate([
            'cijenaKutije' => 'required',
            'nazivKutije' => 'required',
        ]);
    }
}
