@extends('layouts.admin')

@section("title", "Aggiungi un Progetto")

@section("content")
<form action="{{route("admin.projects.store")}}" method="POST" enctype="multipart/form-data">>
    @csrf
    
    <div class="form-control mb-3 d-flex flex-column">
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="type_id"> Categoria </label>
        <select name="type_id" id="type_id">
            @foreach ($types as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>
    </div>

     <div class="form-control mb-3 d-flex flex-column">
        <label for="description">Descrizione</label>
        <input type="text" name="description" id="description">
    </div>

   
    <div class="form-control mb-3 d-flex flex-wrap">
        @foreach($technologies as $technology)
        <div class="tag me-2">
        <input type="checkbox" name="technologies[]" value="{{$technology->id}}" id="technology-{{$technology->id}}">
        <label for="technology{{$technology->id}}">{{$technology->name }}</label>
        </div>
        @endforeach
    </div>
     


    
      <div class="form-control mb-3 d-flex flex-column">
        <label for="link_github">GitHub</label>
        <input type="text" name="link_github" id="link_github">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
          <label for="image">Immagine</label>
        <input type="file" name="image" id="image">
    </div>

    <input type="submit" value="Salva">


</form>


@endsection

