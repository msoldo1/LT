@extends('layouts.app')

@section('title', 'Nova cipka')


@section('content')
    <div class="row">
        <div class="col">
            <h1>Nova cipka</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/cipke" method="post">

                @include('cipka.form')

                <button type="submit" class="btn btn-primary">Dodaj cipku</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
