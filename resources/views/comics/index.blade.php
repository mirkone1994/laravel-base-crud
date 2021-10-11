@extends('layouts.main')
@section('title', 'Comics')
@section('section-id', 'comics')
@section('content')
    <h1 class="card-title">Comics</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Inizio vendita</th>
            <th scope="col">Prezzo</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        Non ho trovato fumetti
                    </td>
                </tr>
            @endforelse
        </tbody>
      </table>
@endsection