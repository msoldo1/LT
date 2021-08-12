@extends('layouts.app')

@section('title')
    Guma {{ $guma->nazivGume}}
@endsection

@section('content')

    <div class="row pb-3">
        <div class="col-12">
            <div class="d-flex">
                <div class="mr-auto p-2"><h1>Guma {{ $guma->nazivGume }}</h1></div>
                <div class="p-2"><a href="{{ $guma->id }}/edit" class="btn btn-primary" role="button">Uredi</a></div>
                <div class="p-2">
                    <form action="/gume/{{ $guma->id }}" method="POST">
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
            <p><strong>Naziv gume:</strong> {{ $guma->nazivGume }}</p>
            <p><strong>Cijena gume:</strong> {{ $guma->cijenaGume }}</p>
            <hr>
            <h5>Unešena količina gume</h5>
            <p><strong>{{ $guma->unesenoGume }}</strong></p>
            <hr>
            <h5>Potrošeno platna</h5>
            <p><strong> {{ $guma->potrosenoGume }}</strong></p>
            <hr>
            <h5>Trenutna količina platna:</h5>
            <p><strong>{{ $guma->trenutnoGume}}</strong></p>
            <hr>
            <div class="p-2"><a href="/kolicinaGuma/{{ $guma->id }}/create" class="btn btn-primary" role="button">Unesi novu količinu gume</a></div>
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
            @if($guma->kolicine != null)
                @foreach($guma->kolicine as $kolicina)
                    @if($kolicina->is_deleted == '0')
                        <tr>
                            <th scope="row">{{ $kolicina->id }}</th>
                            <td>
                                {{ $kolicina->kolicina }}
                            </td>
                            <td>
                                <a href="../kolicinaGuma/{{ $kolicina->id }}">Detalji</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

@endsection
