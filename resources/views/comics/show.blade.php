@extends('layouts.main')

@section('title', $comic->title)

@section('section_id', "comic-show")

@section('cdns')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css' integrity='sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA==' crossorigin='anonymous'/>
@endsection

@section('content')
    <div class="card-body row">
        <div class="col-3 text-center">
            @if ($comic->thumb)
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
            @endif
        </div>
        <div class="col-9">
            <h3 class="d-inline">{{ $comic->title }}</h3><span><a href="{{ route('comics.edit', $comic->id) }}"><i class="fas fa-pencil-alt text-dark ms-2"></i></a></span>
            <p>{{ $comic->description }}</p>
        </div>
    </div>
    <div class="card-footer bg-white d-flex justify-content-end">
        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete-form" data-comic="{{ $comic->title }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
    </div>
@endsection
@section('script')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection