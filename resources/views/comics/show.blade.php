@extends('layouts.main')

@section('title', $comic->title)

@section('section_id', "comic-show")

@section('content')
    <div class="card-body row">
        <div class="col-3 text-center">
            @if ($comic->thumb)
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
            @endif
        </div>
        <div class="col-9">
            <h3>{{ $comic->title }}</h3>
            <p>{{ $comic->description }}</p>
        </div>
    </div>
    
@endsection