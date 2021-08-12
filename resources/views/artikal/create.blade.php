@extends('layouts.app')

@section('title')
     Lista artikala
@endsection

@section('content')

    <div class="row">
        <h1>Artikli</h1>
        <div class="col-12">
            <form action="/artikli" method="post" >
                @include('artikal.form')
                @csrf
                <button type="submit" class="btn btn-primary">Dodaj artikal</button>
            </form>
        </div>
    </div>
@endsection
