@extends('layouts.app')

@section('title')
    Etiketa {{ $etiketa->tipEtikete}}
@endsection

@section('content')

    <div class="row pb-3">
        <div class="col-12">
            <div class="d-flex">
                <div class="mr-auto p-2"><h1>Etiketa {{ $etiketa->tipEtikete }}</h1></div>
                <div class="p-2"><a href="{{ $etiketa->id }}/edit" class="btn btn-primary" role="button">Uredi</a></div>
                <div class="p-2">
                    <form action="/etikete/{{ $etiketa->id }}" method="POST">
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
            <p><strong>Tip etikete:</strong> {{ $etiketa->tipEtikete }}</p>
            <p><strong>Cijena:</strong> {{ $etiketa->cijenaEtikete }}</p>
        </div>

    </div>



@endsection
