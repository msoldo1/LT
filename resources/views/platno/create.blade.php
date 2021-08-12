@extends('layouts.app')

@section('title', 'Novo platno')


@section('content')
    <div class="row">
        <div class="col">
            <h1>Novo Platno</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/platna" method="post">

                @include('platno.form')

                <button type="submit" class="btn btn-primary">Dodaj platno</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
