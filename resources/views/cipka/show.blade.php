@extends('layouts.app')

@section('title')
    Ci{{ $cipka->nazivCipke}}
@endsection

@section('content')

    <div class="row pb-3">
        <div class="col-12">
            <div class="d-flex">
                <div class="mr-auto p-2"><h1>Guma {{ $cipka->nazivCipke }}</h1></div>
                <div class="p-2"><a href="{{ $cipka->id }}/edit" class="btn btn-primary" role="button">Uredi</a></div>
                <div class="p-2">
                    <form action="/cipke/{{ $cipka->id }}" method="POST">
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
            <p><strong>Naziv cipke:</strong> {{ $cipka->nazivCipke }}</p>
            <p><strong>Cijena cipke:</strong> {{ $cipka->cijenaCipke }}</p>
            <hr>
            <h5>Unešena količina cipke</h5>
            <p><strong>{{ $cipka->unesenoCipke }}</strong></p>
            <hr>
            <h5>Potrošeno cipke</h5>
            <p><strong> {{ $cipka->potrosenoCipke }}</strong></p>
            <hr>
            <h5>Trenutna količina cipke:</h5>
            <p><strong>{{ $cipka->trenutnoCipke}}</strong></p>
            <hr>
            <div class="p-2"><a href="/kolicinaCipke/{{ $cipka->id }}/create" class="btn btn-primary" role="button">Unesi novu količinu cipke</a></div>
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
            @if($cipka->kolicine != null)
                @foreach($cipka->kolicine as $kolicina)
                    @if($kolicina->is_deleted == '0')
                        <tr>
                            <th scope="row">{{ $kolicina->id }}</th>
                            <td>
                                {{ $kolicina->kolicina }}
                            </td>
                            <td>
                                <a href="../kolicinaCipke/{{ $kolicina->id }}">Detalji</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

@endsection
