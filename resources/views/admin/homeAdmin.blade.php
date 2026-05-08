@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Benvenuto nell'area admin! 👋</h1>
            <p class="text-muted">Gestisci il tuo portfolio da qui.</p>
        </div>
    </div>

    {{-- Card di esempio --}}
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Progetti</h5>
                    <p class="card-text">Gestisci i tuoi progetti</p>
                    <a href="{{ route('admin.project.index') }}" class="btn btn-light btn-sm">Vai →</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Esperienze</h5>
                    <p class="card-text">Aggiungi le tue esperienze</p>
                    <a href="#" class="btn btn-light btn-sm">Vai →</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Contatti</h5>
                    <p class="card-text">Visualizza i messaggi</p>
                    <a href="#" class="btn btn-light btn-sm">Vai →</a>
                </div>
            </div>
        </div>
    </div>
@endsection