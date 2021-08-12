@extends('layouts.app')

@section('title', 'Novi unos kolicine platna')


@section('content')
    <div class="row">
        <div class="col">
            <h1>Nova kolicina platna</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/kolicinaPlatno" method="post">

                @include('kolicinaPlatno.form')

                <button type="submit" class="btn btn-primary">Dodaj kolicinu</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
