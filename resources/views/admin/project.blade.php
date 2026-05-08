@extends('layouts.admin')

@section('title', $project->title)

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <a href="{{ route('admin.project.index') }}" class="btn btn-secondary btn-sm mb-3">← Torna alla lista</a>
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h2 class="mb-0">{{ $project->title }}</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h5>Descrizione</h5>
                        <p>{{ $project->description }}</p>
                    </div>
                    <div class="mb-3">
                        <h5>Tecnologie</h5>
                        <span class="badge bg-primary">{{ $project->technologies }}</span>
                    </div>
                    <div class="mb-3">
                        <h5>Link GitHub</h5>
                        <a href="{{ $project->link_github }}" target="_blank">{{ $project->link_github }}</a>
                    </div>
                    <div class="mb-3">
                        <h5>Creato il</h5>
                        <p>{{ $project->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection