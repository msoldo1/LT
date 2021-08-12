@extends('layouts.app')

@section('title')
    Detalji artikla - {{ $artikal->id }}
@endsection

@section('content')
    <h1>Detalji artikla - {{ $artikal->id }}</h1>
    <div class="row">
        <div class="col-12">
            <form action="/artikli/{{ $artikal->id }}" method="post" >
                @method('PATCH')
                @include('artikal.form')

                <button type="submit" class="btn btn-primary">Dodaj artikal</button>
                @csrf
            </form>
        </div>
    </div>




@endsection
