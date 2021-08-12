@extends('layouts.app')

@section('title')
    Rad {{ $rad->nazivRada}}
@endsection

@section('content')

    <div class="row pb-3">
        <div class="col-12">
            <div class="d-flex">
                <div class="mr-auto p-2"><h1>Rad {{ $rad->nazivRada }}</h1></div>
                <div class="p-2"><a href="{{ $rad->id }}/edit" class="btn btn-primary" role="button">Uredi</a></div>
                <div class="p-2">
                    <form action="/radovi/{{ $rad->id }}" method="POST">
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
            <p><strong>Naziv rada:</strong> {{ $rad->nazivRada }}</p>
            <p><strong>Cijena rada:</strong> {{ $rad->cijenaRada }}</p>

        </div>

    </div>

@endsection
