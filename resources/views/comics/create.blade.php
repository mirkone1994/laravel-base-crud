@extends('layouts.main')
@section('title', 'Crea fumetto')
@section('section-id', 'create-comic')
@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('comics.store') }}">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo Fumetto</label>
                    <input type="text" class="form-control" id="title" name="title">
                    <div class="form-text">Inserire il titolo del fumetto</div>
                  </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="series" class="form-label">Titolo Serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                    <div class="form-text">Inserire il titolo della serie</div>
                  </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" step=".01" name="price">
                    <div class="form-text">Inserire il prezzo</div>
                  </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo di libro</label>
                    <input type="text" class="form-control" id="type" name="type">
                    <div class="form-text">Inserire il tipo di libro</div>
                  </div>
            </div><div class="col-6">
                <div class="mb-3">
                    <label for="thumb" class="form-label">Copertina</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                    <div class="form-text">Inserire la copertina</div>
                  </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data Inizio Vendita</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date">
                    <div class="form-text">Inserire la data di inizio vendita</div>
                  </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                    <div class="form-text">Inserire una descrizione</div>
                  </div>
            </div>
        </div>
        <div class="card-footer bg-white d-flex justify-content-end">
            <button type="reset" class="btn btn-danger me-2">Cancella Tutto</button>
            <button type="submit" class="btn btn-success">Salva</button>
        </div>
    </form>
</div>
@endsection 