@extends('layouts.admin')

@section('title', 'Modifica Tecnologia')

@section('content')
    <h1>Modifica Tecnologia</h1>

    <form action="{{ route('admin.technologies.update', $technology) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="{{ $technology->name }}">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="color">Colore</label>
            <input type="color" name="color" id="color" value="{{ $technology->color }}">
        </div>

        <input type="submit" class="btn btn-primary" value="Salva">
    </form>
@endsection