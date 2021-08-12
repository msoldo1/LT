@extends('layouts.app')

@section('title')
    Artikal {{ $kolicina->artikal->nazivArtikla}}
@endsection

@section('content')

    <div class="row pb-3">
        <div class="col-12">
            <div class="d-flex">
                <div class="mr-auto p-2"><h1>Kolicina {{ $kolicina->artikal->nazivArtikla }}</h1></div>
                <div class="p-2">
                    <form action="/kolicinaArtikla/{{ $kolicina->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Izbriši</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 pb-3">
            <h5>Osnovne informacije</h5>
            <hr>
            <p><strong>Naziv artikla:</strong> {{ $kolicina->artikal->nazivArtikla }}</p>
            <p><strong>Unesena kolicina:</strong> {{ $kolicina->kolicina}}</p>
            <p><strong>Datum unosa</strong> {{ $kolicina->created_at }}</p>
            <hr>
        </div>

    </div>

@endsection
