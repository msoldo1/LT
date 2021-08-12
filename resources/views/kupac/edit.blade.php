@extends('layouts.app')

@section('title','Kupac ' . $kupac->naziv)


@section('content')
    <h1>Detalji kupca {{ $kupac->naziv }}</h1>
    <div class="row">
        <div class="col-12">
            <form action="/kupci/{{ $kupci->id }}" method="post">
                @method('PATCH')
                @include('kupac.form')
                <button type="submit" class="btn btn-primary">Spremi promjene</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
