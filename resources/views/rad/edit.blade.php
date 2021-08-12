@extends('layouts.app')

@section('title','Rad ' . $rad->nazivRada)


@section('content')
    <h1>Detalji rada {{ $rad->nazivRada }}</h1>
    <div class="row">
        <div class="col-12">
            <form action="/radovi/{{ $rad->id }}" method="post">
                @method('PATCH')
                @include('rad.form')
                <button type="submit" class="btn btn-primary">Spremi promjene</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
