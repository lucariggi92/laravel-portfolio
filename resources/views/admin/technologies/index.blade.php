
@extends('layouts.admin')

@section('title', 'Tecnologie')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <h1>Lista Tecnologie</h1>
            <a class="btn btn-primary" href="{{ route('admin.technologies.create') }}">Aggiungi Tecnologia</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Colore</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($technologies as $technology)
                        <tr>
                            <td>{{ $technology->id }}</td>
                            <td>{{ $technology->name }}</td>
                            <td>
                                <span class="badge" style="background-color: {{ $technology->color }}">{{ $technology->color }}</span>
                            </td>
                            <td class="d-flex gap-2">
                                <a href="{{ route('admin.technologies.show', $technology) }}" class="btn btn-primary btn-sm">Dettaglio</a>
                                <a href="{{ route('admin.technologies.edit', $technology) }}" class="btn btn-warning btn-sm">Modifica</a>
                                <form action="{{ route('admin.technologies.destroy', $technology) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger btn-sm" value="Elimina">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection