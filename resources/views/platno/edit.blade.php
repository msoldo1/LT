@extends('layouts.app')

@section('title','Platno ' . $platno->nazivPlatna)


@section('content')
    <h1>Detalji platna {{ $platno->nazivPlatna }}</h1>
    <div class="row">
        <div class="col-12">
            <form action="/platna/{{ $platno->id }}" method="post">
                @method('PATCH')
                @include('platno.form')
                <button type="submit" class="btn btn-primary">Spremi promjene</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
