@extends('layouts.app')

@section('title')
    Kupac {{ $kupac->naziv }}
@endsection

@section('content')

    <div class="row pb-3">
        <div class="col-12">
            <div class="d-flex">
                <div class="mr-auto p-2"><h1>Kupac {{ $kupac->naziv }}</h1></div>
                <div class="p-2"><a href="{{ $kupac->id }}/edit" class="btn btn-primary" role="button">Uredi</a></div>
                <div class="p-2">
                    <form action="/kupci/{{ $kupac->id }}" method="POST">
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
            <p><strong>Naziv kupca:</strong> {{ $kupac->naziv }}</p>
            <p><strong>PDV broj:</strong> {{ $kupac->PDV_broj }}</p>
            <p><strong>ID broj:</strong> {{ $kupac->ID_broj }}</p>

        </div>

    </div>

@endsection
