@extends('layouts.app')

@section('title','Etikete ')


@section('content')
    <h1>Detalji etikete {{ $etiketa->tipEtikete }}</h1>
    <div class="row">
        <div class="col-12">
            <form action="/etikete/{{ $etiketa->id }}" method="post">
                @method('PATCH')
                @include('etiketa.form')
                <button type="submit" class="btn btn-primary">Spremi promjene</button>
                @csrf
            </form>
        </div>
    </div>

@endsection
