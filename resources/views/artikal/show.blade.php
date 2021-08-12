@extends('layouts.app')

@section('title')
    Detalji artikla
@endsection

@section('content')
    <div class="row pb-3">
        <div class="col-12 pb-3">
            <div class="d-flex">
                <div class="mr-auto p-2"><h1>Artikal</h1></div>
                <div class="p-2"><p><a href="{{ $artikal->id }}/edit" class="btn btn-primary" role="button">Uredi</a></p></div>
                <div class="p-2">
                    <form action="/artikli/{{ $artikal->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Izbriši artikal</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 pb-3">
            <h5>Osnovne informacije</h5>
            <hr>
            <p><strong>Naziv artikla:</strong>
                {{ $artikal->nazivArtikla }}
            </p>
            <p><strong>Naziv etikete:</strong>
                <a href="/etikete/{{ $artikal->etiketa->id }}"> {{ $artikal->etiketa->tipEtikete }}</a> Utrošak:
            </p>
            <p><strong>Naziv gume:</strong>
                <a href="/gume/{{ $artikal->guma->id }}"> {{ $artikal->guma->nazivGume }}</a> Utrošak:
            </p>
            <p><strong>Naziv kutije:</strong>
                <a href="/kutije/{{ $artikal->kutija->id }}"> {{ $artikal->kutija->nazivKutije }}</a> Cijena:
            </p>
            <p><strong>Naziv platna:</strong>
                <a href="/platna/{{ $artikal->platno->id }}"> {{ $artikal->platno->nazivPlatna }}</a> Utrošak:
            </p>
            <p><strong>Naziv rada:</strong>
                <a href="/radovi/{{ $artikal->rad->id }}"> {{ $artikal->rad->nazivRada }}</a> Cijena:
            </p>
            <p>
                <strong>Cijena artikla:</strong>
                {{ $artikal->cijenaArtikla }} KM
            </p>
            <hr>
            <div class="p-2"><a href="/download" class="btn btn-success" role="button">Skini artikal u excel</a></div>
            <hr>
            <div class="p-2"><a href="/kolicinaArtikla/{{ $artikal->id }}/create" class="btn btn-primary" role="button">Unesi novu količinu Artikla</a></div>
        </div>
        <table class="table table-striped">
            <thead >
            <tr>
                <th scope="col">ID količine</th>
                <th scope="col">Količina</th>
            </thead>
            <tbody>
            @if($artikal->kolicine != null)
                @foreach($artikal->kolicine as $kolicina)
                    @if($kolicina->is_deleted == '0')
                        <tr>
                            <th scope="row">{{ $kolicina->id }}</th>
                            <td>
                                {{ $kolicina->kolicina }}
                            </td>
                            <td>
                                <a href="../kolicinaArtikla/{{ $kolicina->id }}">Detalji</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            @endif
            </tbody>
        </table>

    </div>
@endsection

