@extends('layouts.app')

@section('title','Guma ' . $guma->nazivGume)


@section('content')
    <h1>Detalji gume {{ $guma->nazivGume }}</h1>
    <div class="row">
        <div class="col-12">
            <form action="/gume/{{ $guma->id }}" method="post">
                @method('PATCH')
                @include('guma.form')
                <button type="submit" class="btn btn-primary">Spremi promjene</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
