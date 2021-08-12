@extends('layouts.app')

@section('title','Kutija ' . $kutija->nazivKutije)


@section('content')
    <h1>Detalji kutije {{ $kutija->nazivKutije }}</h1>
    <div class="row">
        <div class="col-12">
            <form action="/kutije/{{ $kutija->id }}" method="post">
                @method('PATCH')
                @include('kutija.form')
                <button type="submit" class="btn btn-primary">Spremi promjene</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
