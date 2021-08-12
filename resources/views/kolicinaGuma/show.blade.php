@extends('layouts.app')

@section('title')
    Guma {{ $kolicina->guma->nazivGume}}
@endsection

@section('content')

    <div class="row pb-3">
        <div class="col-12">
            <div class="d-flex">
                <div class="mr-auto p-2"><h1>Kolicina {{ $kolicina->guma->nazivGume }}</h1></div>
                <div class="p-2">
                    <form action="/kolicinaGuma/{{ $kolicina->id }}" method="POST">
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
            <p><strong>Naziv gume:</strong> {{ $kolicina->guma->nazivGume }}</p>
            <p><strong>Unesena kolicina:</strong> {{ $kolicina->kolicina}}</p>
            <p><strong>Datum unosa</strong> {{ $kolicina->created_at }}</p>
            <hr>
        </div>

    </div>

@endsection
