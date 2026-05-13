@extends('layouts.admin')

@section('title', $technology->name)

@section('content')
    <a href="{{ route('admin.technologies.index') }}" class="btn btn-secondary btn-sm mb-3">← Torna alla lista</a>

    <div class="card">
        <div class="card-header bg-dark text-white">
            <h2 class="mb-0">{{ $technology->name }}</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <h5>Colore</h5>
                <span class="badge" style="background-color: {{ $technology->color }}">{{ $technology->color }}</span>
            </div>
        </div>
    </div>
@endsection