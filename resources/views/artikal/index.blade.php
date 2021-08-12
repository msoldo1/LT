@extends('layouts.app')

@section('title')
    Lista svih artikala
@endsection

@section('content')

    <div class="row pb-5">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center" >
                <h1>Lista svih artikala</h1>
                <p>
                    <a href="artikli/create" class="btn btn-primary" role="button">Dodaj novi artikal</a>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead >
                <tr>
                    <th scope="col">Id artikla</th>
                    <th scope="col">Etiketa</th>
                    <th scope="col">Guma</th>
                    <th scope="col">Kutija</th>
                    <th scope="col">Platno</th>
                    <th scope="col">Rad</th>
                    <th scope="col">Stanje</th>
                    <th scope="col">Cijena</th>
                </tr>
                </thead>

                <tbody>
                @foreach($artikli as $artikal)
                    @if($artikal->is_deleted == '0')
                        <tr>
                            <th scope="row">{{ $artikal->id }}</th>
                            <td>
                                <a href="/etikete/{{ $artikal->etiketa->id }}">
                                    {{ $artikal->etiketa->tipEtikete }}
                                </a>
                            </td>
                            <td>
                                <a href="/gume/{{ $artikal->guma->id }}">
                                    {{ $artikal->guma->nazivGume}}
                                </a>
                            </td>
                            <td>
                                <a href="/kutije/{{ $artikal->kutija->id }}">
                                    {{ $artikal->kutija->nazivKutije }}
                                </a>
                            </td>
                            <td>
                                <a href="/platna/{{ $artikal->platno->id }}">
                                    {{ $artikal->platno->nazivPlatna }}
                                </a>
                            </td>
                            <td>
                                <a href="/radovi/{{ $artikal->rad->id }}">
                                    {{ $artikal->rad->nazivRada }}
                                </a>
                            </td>
                            <td>
                                {{ $artikal->unesenoArtikal}}
                            </td>
                            <td>
                                {{ $artikal->cijenaArtikla}}
                            </td>
                            <td>
                                <a href="/artikli/{{ $artikal->id }}">
                                    Detalji
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
