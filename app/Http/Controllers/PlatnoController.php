<?php

namespace App\Http\Controllers;


use App\Platno;
use Illuminate\Http\Request;

class PlatnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platna = Platno::all();
        return view('platno.index', compact('platna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $platno = new Platno();
        return view ('platno.create',compact('platno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Platno::create($this->validateRequest());

        return redirect('platna');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Platno  $platno
     * @return \Illuminate\Http\Response
     */
    public function show(Platno $platno)
    {
        $platno->trenutnoPlatna = $platno->unesenoPlatna - $platno->potrosenoPlatna;
        $platno->save();
        return view('platno.show', compact('platno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Platno  $platno
     * @return \Illuminate\Http\Response
     */
    public function edit(Platno $platno)
    {
        return view('platno.edit', compact('platno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Platno  $platno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platno $platno)
    {
        $platno->update($this->validateRequest());
        return redirect('platna/' . $platno->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Platno  $platno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platno $platno)
    {
        $platno->is_deleted = '1';
        $platno->save();

        return redirect('platna');
    }
    private function validateRequest()
    {
        return request()->validate([
            'nazivPlatna' => 'required',
            'cijenaPlatna' => 'required',
        ]);
    }
}
