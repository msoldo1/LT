@extends('layouts.app')

@section('title')
    Detalji racuna
@endsection

@section('content')
    <div class="row pb-3">
        <div class="col-12 pb-3">
            <div class="d-flex">
                <div class="mr-auto p-2"><h1>Racun br. {{$racun->id}}</h1></div>
                <div class="p-2"><p><a href="{{ $racun->id }}/edit" class="btn btn-primary" role="button">Uredi</a></p></div>
                <div class="p-2">
                    <form action="/racuni/{{ $racun->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Izbriši racun</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 pb-3">
            <h5>Informacije o kupcu</h5>
            <hr>
            <p><strong>Naziv kupca:</strong>
                {{ $racun->kupac->naziv }}
            </p>
            <hr>
            <p><strong>Artikli:</strong>
                {{ $racun->kupac->naziv }}
            </p>
            <div class="p-2"><a href="" class="btn btn-primary" role="button">Dodaj novi artikal i kolicinu</a></div>
        </div>


    </div>
@endsection

