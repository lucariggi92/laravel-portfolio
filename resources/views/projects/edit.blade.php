@extends('layouts.admin')

@section("title", "Modifica il Progetto")

@section("content")
<form action="{{route("projects.update", $project) }}" method="POST">
    @csrf
    @method("PUT")
    
    <div class="form-control mb-3 d-flex flex-column">
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title" value="{{$project->title}}">
    </div>

     <div class="form-control mb-3 d-flex flex-column">
        <label for="description">Descrizione</label>
        <input type="text" name="description" id="description" value="{{$project->description}}">>
    </div>

      <div class="form-control mb-3 d-flex flex-column">
        <label for="technologies">Tecnologie</label>
        <input type="text" name="technologies" id="technologies" value="{{$project->technologies}}">>
    </div>

    
      <div class="form-control mb-3 d-flex flex-column">
        <label for="link_github">GitHub</label>
        <input type="text" name="link_github" id="link_github" value="{{$project->link_github}}">>
    </div>

    <input type="submit" value="Salva">


</form>


@endsection

