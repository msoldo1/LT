@extends('layouts.app')

@section('title')
    Lista svih cipki
@endsection

@section('content')
    <div class="row pb-5">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center" >
                <h1>Lista svih cipki</h1>
                <p>
                    <a href="cipke/create" class="btn btn-primary" role="button">Dodaj novu cipku</a>
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
                    <th scope="col">Naziv cipke</th>
                    <th scope="col">Cijena cipke</th>
                    <th scope="col">Stanje cipke</th>
                </thead>
                <tbody>
                @foreach ($cipke as $cipka)
                    @if ($cipka->is_deleted == '0')
                    <tr>
                        <th scope="row">{{ $cipka->id }}</th>
                        <td>
                            {{ $cipka->nazivCipke }}
                        </td>
                        <td>
                            {{ $cipka->cijenaCipke }}
                        </td>
                        <td>
                            {{ $cipka->trenutnoCipke }} kg
                        </td>
                        <td><a href="/cipke/{{ $cipka->id }}">Detalji</a></td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
