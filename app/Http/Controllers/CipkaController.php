<?php

namespace App\Http\Controllers;

use App\Cipka;
use Illuminate\Http\Request;

class CipkaController extends Controller
{

    public function index()
    {

        $cipke = Cipka::all();
        return view('cipka.index', compact('cipke'));
    }


    public function create()
    {
        $cipka = new Cipka();
        return view ('cipka.create',compact('cipka'));
    }


    public function store(Request $request)
    {
        Cipka::create($this->validateRequest());

        return redirect('cipke');
    }


    public function show(Cipka $cipka)
    {
        $cipka->trenutnoCipke = $cipka->unesenoCipke - $cipka->potrosenoCipke;
        $cipka->save();
        return view('cipka.show', compact('cipka'));
    }


    public function edit(Cipka $cipka)
    {
        return view('cipka.edit', compact('cipka'));
    }


    public function update(Request $request, Cipka $cipka)
    {
        $cipka->update($this->validateRequest());
        return redirect('cipke/' . $cipka->id);
    }

    public function destroy(Cipka $cipka)
    {
        $cipka->is_deleted = '1';
        $cipka->save();

        return redirect('cipke');
    }

    private function validateRequest()
    {
        return request()->validate([
            'nazivCipke' => 'required',
            'cijenaCipke' => 'required',
        ]);
    }
}
