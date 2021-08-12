@extends('layouts.app')

@section('title')
    Lista svih platna
@endsection

@section('content')
    <div class="row pb-5">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center" >
                <h1>Lista svih platna</h1>
                <p>
                    <a href="platna/create" class="btn btn-primary" role="button">Dodaj novo platno</a>
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
                    <th scope="col">Naziv platna</th>
                    <th scope="col">Cijena platna</th>
                    <th scope="col">Stanje platna</th>
                </thead>
                <tbody>
                @foreach ($platna as $platno)
                    @if ($platno->is_deleted == '0')
                    <tr>
                        <th scope="row">{{ $platno->id }}</th>
                        <td>
                            {{ $platno->nazivPlatna }}
                        </td>
                        <td>
                            {{ $platno->cijenaPlatna }}
                        </td>
                        <td>
                            {{ $platno->trenutnoPlatna }} kg
                        </td>
                        <td><a href="/platna/{{ $platno->id }}">Detalji</a></td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
