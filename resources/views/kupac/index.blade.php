@extends('layouts.app')

@section('title')
    Lista svih kupaca
@endsection

@section('content')
    <div class="row pb-5">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center" >
                <h1>Lista svih kupaca</h1>
                <p>
                    <a href="kupci/create" class="btn btn-primary" role="button">Dodaj novog kupca</a>
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
                    <th scope="col">Naziv kupca</th>
                    <th scope="col">PDV broj</th>
                    <th scope="col">ID broj</th>
                </thead>
                <tbody>
                @foreach ($kupci as $kupac)
                    @if ($kupac->is_deleted == '0')
                    <tr>
                        <th scope="row">{{ $kupac->id }}</th>
                        <td>
                            {{ $kupac->naziv }}
                        </td>
                        <td>
                            {{ $kupac->PDV_broj }}
                        </td>
                        <td>
                            {{ $kupac->ID_broj }}
                        </td>
                        <td><a href="/kupci/{{ $kupac->id }}">Detalji</a></td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
