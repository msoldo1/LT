@extends('layouts.app')

@section('title')
    Lista svih etiketa
@endsection

@section('content')
    <div class="row pb-5">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center" >
                <h1>Lista svih etiketa</h1>
                <p>
                    <a href="etikete/create" class="btn btn-primary" role="button">Dodaj novu etiketu</a>
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
                    <th scope="col">Tip etikete</th>
                    <th scope="col">Cijena etikete</th>
                </thead>
                <tbody>
                @foreach ($etikete as $etiketa)
                    @if ($etiketa->is_deleted == '0')
                    <tr>
                        <th scope="row">{{ $etiketa->id }}</th>
                        <td>
                            {{ $etiketa->tipEtikete }}
                        </td>
                        <td>
                            {{ $etiketa->cijenaEtikete }}
                        </td>
                        <td><a href="/etikete/{{ $etiketa->id }}">Detalji</a></td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
