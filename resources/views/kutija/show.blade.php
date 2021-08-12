@extends('layouts.app')

@section('title')
    Kutija {{ $kutija->nazivKutije}}
@endsection

@section('content')

    <div class="row pb-3">
        <div class="col-12">
            <div class="d-flex">
                <div class="mr-auto p-2"><h1>Kutija {{ $kutija->nazivKutije }}</h1></div>
                <div class="p-2"><a href="{{ $kutija->id }}/edit" class="btn btn-primary" role="button">Uredi</a></div>
                <div class="p-2">
                    <form action="/kutije/{{ $kutija->id }}" method="POST">
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
            <p><strong>Naziv kutije:</strong> {{ $kutija->nazivKutije }}</p>
            <p><strong>Cijena kutije:</strong> {{ $kutija->cijenaKutije }}</p>

        </div>

    </div>

@endsection
