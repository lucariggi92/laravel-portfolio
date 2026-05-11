@extends('layouts.admin')

@section('title', 'Progetti')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <h1>Lista Progetti </h1>
        </div>
     <a class="btn btn-primary" href="{{route("projects.create"}}">Aggiungi Progetto</a>

        </button>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titolo</th>
                        <th>Tecnologie</th>
                        <th>GitHub</th>
                        <th>Data creazione</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->technologies }}</td>
                            <td>
                                <a href="{{ $project->link_github }}" target="_blank">Vedi repo</a>
                            </td>
                            <td>{{ $project->created_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('admin.project.show', $project) }}" class="btn btn-primary btn-sm">Dettaglio</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection