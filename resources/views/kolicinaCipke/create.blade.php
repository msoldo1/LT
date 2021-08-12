@extends('layouts.app')

@section('title', 'Novi unos kolicine cipke')


@section('content')
    <div class="row">
        <div class="col">
            <h1>Nova kolicina cipke</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/kolicinaCipke" method="post">

                @include('kolicinaCipke.form')

                <button type="submit" class="btn btn-primary">Dodaj kolicinu</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
