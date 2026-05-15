@extends('layouts.admin')

@section('title', $project->title)

@section('content')
    <div class="row mb-4">
        <div class="col-12">
                 <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary btn-sm mb-3">← Torna alla lista</a>
        <div class="d-flex gap-2 mb-3">

        
                <a class="btn btn-warning" href="{{route("admin.projects.edit", $project)}}">Modifica</a>
                            <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Elimina
            </button>
        </div>
   
     



            <div class="card">         
                <div class="card-header bg-dark text-white">
                    <h2 class="mb-0">{{ $project->title }}</h2>
                </div>

                @if($project->image)
                <div>
                    <img src="{{asset("storage/" . $project->image)}}" alt="copertina">
                </div>
                @endif

                <div class="card-body">
                     <div class="mb-3">
                        <p>Tipologia:{{ $project->type->name }}</p>
                    </div>
                    <div class="mb-3">
                        <h5>Descrizione</h5>
                        <p>{{ $project->description }}</p>
                    </div>
                    <div class="mb-3">
                        <h5>Tecnologie</h5>
                        @foreach($project->technologies as $technology)
                        <span class="badge" style="background-color:{{$technology->color}}">{{ $technology->name }}</span>
                        @endforeach
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



    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Elimina il progetto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vuoi eliminare il progetto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        <form action="{{route("admin.projects.destroy", $project)}}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" class="btn btn-danger" value="Elimina">
    </form>

      </div>
    </div>
  </div>
</div>
@endsection