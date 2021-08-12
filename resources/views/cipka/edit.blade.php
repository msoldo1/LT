@extends('layouts.app')

@section('title','Cipka ' . $cipka->nazivCipke)


@section('content')
    <h1>Detalji cipke {{ $cipka->nazivCipke }}</h1>
    <div class="row">
        <div class="col-12">
            <form action="/cipke/{{ $cipka->id }}" method="post">
                @method('PATCH')
                @include('cipka.form')
                <button type="submit" class="btn btn-primary">Spremi promjene</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
