@extends('layouts.app')

@section('title', 'Novo vozilo')


@section('content')
    <div class="row">
        <div class="col">
            <h1>Nova etiketa</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/etikete" method="post">

                @include('etiketa.form')

                <button type="submit" class="btn btn-primary">Dodaj etiketu</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
