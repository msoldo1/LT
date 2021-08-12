<?php

namespace App\Http\Controllers;

use App\Rad;
use Illuminate\Http\Request;

class RadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $radovi = Rad::all();
        return view('rad.index', compact('radovi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rad = new Rad();
        return view ('rad.create',compact('rad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rad::create($this->validateRequest());

        return redirect('radovi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rad  $rad
     * @return \Illuminate\Http\Response
     */
    public function show(Rad $rad)
    {
        return view('rad.show', compact('rad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rad  $rad
     * @return \Illuminate\Http\Response
     */
    public function edit(Rad $rad)
    {
        return view('rad.edit', compact('rad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rad  $rad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rad $rad)
    {
        $rad->update($this->validateRequest());
        return redirect('radovi/' . $rad->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rad  $rad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rad $rad)
    {
        $rad->is_deleted = '1';
        $rad->save();

        return redirect('radovi');
    }

    private function validateRequest()
    {
        return request()->validate([
            'nazivRada' => 'required',
            'cijenaRada' => 'required',
        ]);
    }
}
