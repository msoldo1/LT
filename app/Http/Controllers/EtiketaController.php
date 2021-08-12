<?php

namespace App\Http\Controllers;

use App\Etiketa;
use Illuminate\Http\Request;

class EtiketaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etikete = Etiketa::all();


        return view('etiketa.index', compact('etikete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etiketa = new Etiketa();
        return view('etiketa.create', compact('etiketa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Etiketa::create($this->validateRequest());
        return redirect('etikete');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etiketa  $etiketa
     * @return \Illuminate\Http\Response
     */
    public function show(Etiketa $etiketa)
    {
        return view('etiketa.show', compact('etiketa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etiketa  $etiketa
     * @return \Illuminate\Http\Response
     */
    public function edit(Etiketa $etiketa)
    {
        return view('etiketa.edit', compact('etiketa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etiketa  $etiketa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etiketa $etiketa)
    {
        $etiketa->update($this->validateRequest());
        return redirect('etikete/' . $etiketa->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etiketa  $etiketa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etiketa $etiketa)
    {
        $etiketa->is_deleted = '1';
        $etiketa->save();

        return redirect('etikete');
    }

    private function validateRequest()
    {
        return request()->validate([
            'tipEtikete' => 'required',
            'cijenaEtikete' => 'required',
        ]);
    }
}
