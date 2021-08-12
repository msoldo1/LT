@extends('layouts.app')

@section('title', 'Novi kupac')


@section('content')
    <div class="row">
        <div class="col">
            <h1>Novi kupac</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/kupci" method="post">

                @include('kupac.form')

                <button type="submit" class="btn btn-primary">Dodaj kupca</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
