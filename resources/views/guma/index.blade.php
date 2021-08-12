@extends('layouts.app')

@section('title')
    Lista svih guma
@endsection

@section('content')
    <div class="row pb-5">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center" >
                <h1>Lista svih guma</h1>
                <p>
                    <a href="gume/create" class="btn btn-primary" role="button">Dodaj novu gumu</a>
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
                    <th scope="col">Naziv gume</th>
                    <th scope="col">Cijena gume</th>
                    <th scope="col">Stanje gume</th>
                </thead>
                <tbody>
                @foreach ($gume as $guma)
                    @if ($guma->is_deleted == '0')
                    <tr>
                        <th scope="row">{{ $guma->id }}</th>
                        <td>
                            {{ $guma->nazivGume }}
                        </td>
                        <td>
                            {{ $guma->cijenaGume }}
                        </td>
                        <td>
                            {{ $guma->trenutnoGume }} kg
                        </td>
                        <td><a href="/gume/{{ $guma->id }}">Detalji</a></td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
