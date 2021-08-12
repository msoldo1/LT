@extends('layouts.app')

@section('title')
    Lista svih kutija
@endsection

@section('content')
    <div class="row pb-5">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center" >
                <h1>Lista svih kutija</h1>
                <p>
                    <a href="kutije/create" class="btn btn-primary" role="button">Dodaj novu kutiju</a>
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
                    <th scope="col">Naziv kutije</th>
                    <th scope="col">Cijena kutije</th>
                </thead>
                <tbody>
                @foreach ($kutije as $kutija)
                    @if ($kutija->is_deleted == '0')
                    <tr>
                        <th scope="row">{{ $kutija->id }}</th>
                        <td>
                            {{ $kutija->nazivKutije }}
                        </td>
                        <td>
                            {{ $kutija->cijenaKutije }}
                        </td>
                        <td><a href="/kutije/{{ $kutija->id }}">Detalji</a></td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
