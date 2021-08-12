@extends('layouts.app')

@section('title')
    Lista svih artikala
@endsection

@section('content')

    <div class="row pb-5">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center" >
                <h1>Lista svih racuna</h1>
                <p>
                    <a href="racuni/create" class="btn btn-primary" role="button">Dodaj novi racun</a>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead >
                <tr>
                    <th scope="col">Id racuna</th>
                    <th scope="col">Naziv kupca</th>
                    <th scope="col">datum</th>
                </tr>
                </thead>

                <tbody>
                @foreach($racuni as $racun)
                    @if($racun->is_deleted == '0')
                        <tr>
                            <th scope="row">{{ $racun->id }}</th>
                            <td>
                                <a href="/racuni/{{ $racun->kupac->id }}">
                                    {{ $racun->kupac->naziv }}
                                </a>
                            </td>
                            <td>
                                {{ $racun->created_at }}
                            </td>
                            <td><a href="/racuni/{{ $racun->id }}">Detalji</a></td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
