@extends('layouts.app')

@section('title')
     Lista racuna
@endsection

@section('content')

    <div class="row">
        <h1>Racuni</h1>
        <div class="col-12">
            <form action="/racuni" method="post" >
                @include('racun.form')
                @csrf
                <hr>
                <button type="submit" class="btn btn-primary">Potvrdi kupca</button>
            </form>
        </div>
    </div>
@endsection
