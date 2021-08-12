@extends('layouts.app')

@section('title', 'Novi unos kolicine gume')


@section('content')
    <div class="row">
        <div class="col">
            <h1>Nova kolicina gume</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/kolicinaGuma" method="post">

                @include('kolicinaGuma.form')

                <button type="submit" class="btn btn-primary">Dodaj kolicinu</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
