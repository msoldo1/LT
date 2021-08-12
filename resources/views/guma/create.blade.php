@extends('layouts.app')

@section('title', 'Nova guma')


@section('content')
    <div class="row">
        <div class="col">
            <h1>Nova guma</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/gume" method="post">

                @include('guma.form')

                <button type="submit" class="btn btn-primary">Dodaj gumu</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
