@extends('layouts.app')

@section('title', 'Nova kutija')


@section('content')
    <div class="row">
        <div class="col">
            <h1>Nova kutija</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/kutije" method="post">

                @include('kutija.form')

                <button type="submit" class="btn btn-primary">Dodaj kutiju</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
