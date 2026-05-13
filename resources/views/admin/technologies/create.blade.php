@extends('layouts.admin')

@section('title', 'Aggiungi Tecnologia')

@section('content')
    <h1>Aggiungi Tecnologia</h1>

    <form action="{{ route('admin.technologies.store') }}" method="POST">
        @csrf

        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="color">Colore</label>
            <input type="color" name="color" id="color">
        </div>

        <input type="submit" class="btn btn-primary" value="Salva">
    </form>
@endsection