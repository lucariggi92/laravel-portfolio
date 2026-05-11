@extends('layouts.admin')

@section("title", "Aggiungi un Progetto")

@section("content")
<form action="{{route("admin.projects.store")}}" method="POST">
    @csrf
    
    <div class="form-control mb-3 d-flex flex-column">
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title">
    </div>

     <div class="form-control mb-3 d-flex flex-column">
        <label for="description">Descrizione</label>
        <input type="text" name="description" id="description">
    </div>

      <div class="form-control mb-3 d-flex flex-column">
        <label for="technologies">Tecnologie</label>
        <input type="text" name="technologies" id="technologies">
    </div>

    
      <div class="form-control mb-3 d-flex flex-column">
        <label for="link_github">GitHub</label>
        <input type="text" name="link_github" id="link_github">
    </div>

    <input type="submit" value="Salva">


</form>


@endsection

