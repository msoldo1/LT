@extends('layouts.app')

@section('title')
    Platno {{ $platno->nazivPlatna}}
@endsection

@section('content')

    <div class="row pb-3">
        <div class="col-12">
            <div class="d-flex">
                <div class="mr-auto p-2"><h1>Platno {{ $platno->nazivPlatna }}</h1></div>
                <div class="p-2"><a href="{{ $platno->id }}/edit" class="btn btn-primary" role="button">Uredi</a></div>
                <div class="p-2">
                    <form action="/platna/{{ $platno->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Izbriši</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 pb-3">
            <h5>Osnovne informacije</h5>
            <hr>
            <p><strong>Naziv platna:</strong> {{ $platno->nazivPlatna }}</p>
            <p><strong>Cijena platna:</strong> {{ $platno->cijenaPlatna }}</p>
            <hr>
            <h5>Unešena količina platna</h5>
            <p><strong>{{ $platno->unesenoPlatna }}</strong></p>
            <hr>
            <h5>Potrošeno platna</h5>
            <p><strong> {{ $platno->potrosenoPlatna }}</strong></p>
            <hr>
            <h5>Trenutna količina platna:</h5>
            <p><strong>{{ $platno->trenutnoPlatna }}</strong></p>
            <hr>
            <div class="p-2"><a href="/kolicinaPlatno/{{ $platno->id }}/create" class="btn btn-primary" role="button">Unesi novu količinu platna</a></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <h3>Popis unosa količina</h3>
                </div>
            </div>
        </div>

        <table class="table table-striped">
            <thead >
            <tr>
                <th scope="col">ID količine</th>
                <th scope="col">Količina</th>
            </thead>
            <tbody>
            @if($platno->kolicine != null)
                @foreach($platno->kolicine as $kolicina)
                    @if($kolicina->is_deleted == '0')
                        <tr>
                            <th scope="row">{{ $kolicina->id }}</th>
                            <td>
                                {{ $kolicina->kolicina }}
                            </td>
                            <td>
                                <a href="../kolicinaPlatno/{{ $kolicina->id }}">Detalji</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

@endsection
