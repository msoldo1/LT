@extends('layouts.app')

@section('title')
    Lista svih radova
@endsection

@section('content')
    <div class="row pb-5">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center" >
                <h1>Lista svih radova</h1>
                <p>
                    <a href="radovi/create" class="btn btn-primary" role="button">Dodaj novi rad</a>
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead >
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Naziv rada</th>
                    <th scope="col">Cijena rada</th>
                </thead>
                <tbody>
                @foreach ($radovi as $rad)
                    @if ($rad->is_deleted == '0')
                    <tr>
                        <th scope="row">{{ $rad->id }}</th>
                        <td>
                            {{ $rad->nazivRada }}
                        </td>
                        <td>
                            {{ $rad->cijenaRada }}
                        </td>
                        <td><a href="/radovi/{{ $rad->id }}">Detalji</a></td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
