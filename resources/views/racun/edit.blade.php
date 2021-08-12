@extends('layouts.app')

@section('title')
    Detalji racuna - {{ $racun->id }}
@endsection

@section('content')
    <h1>Detalji racuna - {{ $racun->id }}</h1>
    <div class="row">
        <div class="col-12">
            <form action="/racuni/{{ $racuni->id }}" method="post" >
                @method('PATCH')
                @include('racun.form')

                <button type="submit" class="btn btn-primary">Dodaj racun</button>
                @csrf
            </form>
        </div>
    </div>




@endsection
