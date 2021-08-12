@extends('layouts.app')

@section('title', 'Novi rad')


@section('content')
    <div class="row">
        <div class="col">
            <h1>Novi rad</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/radovi" method="post">

                @include('rad.form')

                <button type="submit" class="btn btn-primary">Dodaj rad</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
