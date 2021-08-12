@extends('layouts.app')

@section('title')
    Detalji artikla i kolicine - {{ $racun->id }}
@endsection

@section('content')
    <h1>Detalji artikla i kolicine - {{ $racun->id }}</h1>
    <div class="row">
        <div class="col-12">
            <form action="/racunArtikal" method="post" >
                @method('PATCH')
                @include('racunArtikal.form')

                <button type="submit" class="btn btn-primary">Uredi artikal i količinu</button>
                @csrf
            </form>
        </div>
    </div>




@endsection
