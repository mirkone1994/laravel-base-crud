@extends('layouts.main')
@section('title', 'Comics')
@section('section-id', 'comics')
@section('content')
    @if(session('delete'))
    <div class="alert alert-success" role="alert">
        {{ session('delete') }} eliminato con successo!
    </div>
    @endif
    <h1 class="card-title">Comics</h1>
    <a class="btn btn-primary w-25" href="{{ route('comics.create') }}">Crea il tuo fumetto</a>
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
                    <td>
                        @if ($comic->thumb)
                            <img src="{{ $comic->thumb }}" alt="" class="img-fluid me-2" width="20">
                        @endif
                        {{ $comic->title }}
                    </td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->price }}</td>
                    <td class="d-flex">
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Dettagli</a>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning ms-2">Modifica</a>
                        <form method="POST" action="{{ route('comics.destroy', $comic->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ms-2">Elimina</button>
                        </form>
                    </td>
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