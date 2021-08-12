@extends('layouts.app')

@section('title', 'Novi unos kolicine artikla')


@section('content')
    <div class="row">
        <div class="col">
            <h1>Nova kolicina artikla</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/kolicinaArtikla" method="post">

                @include('kolicinaArtikal.form')

                <button type="submit" class="btn btn-primary">Dodaj kolicinu</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
