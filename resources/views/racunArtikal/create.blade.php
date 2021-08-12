@extends('layouts.app')

@section('title')
     Artikli i kolicine
@endsection

@section('content')

    <div class="row">
        <h1>Odaberi artikal i kolicinu </h1>
        <div class="col-12">
            <form action="/racunArtikli" method="post" >
                @include('racunArtikal.form')
                @csrf
                <hr>
                <button type="submit" class="btn btn-primary">Potvrdi artikal i kolicinu</button>
            </form>
        </div>
    </div>
@endsection
