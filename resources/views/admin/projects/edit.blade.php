@extends('layouts.admin')

@section("title", "Modifica il Progetto")

@section("content")
<form action="{{route("admin.projects.update", $project) }}" method="POST" ecntype="multipart/form-data">
    @csrf
    @method("PUT")
    
    <div class="form-control mb-3 d-flex flex-column">
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title" value="{{$project->title}}">
    </div>

     <div class="form-control mb-3 d-flex flex-column">
        <label for="type_id"> Categoria </label>
        <select name="type_id" id="type_id">
            @foreach ($types as $type)
            <option value="{{$type->id}}" {{$type->id ? "selected": ""}}>{{$type->name}}</option>
            @endforeach
        </select>
    </div>

     <div class="form-control mb-3 d-flex flex-column">
        <label for="description">Descrizione</label>
        <input type="text" name="description" id="description" value="{{$project->description}}">
    </div>

      <div class="form-control mb-3 d-flex flex-wrap">
      @foreach($technologies as $technology)
      <div class="me-3">
         <input type="checkbox" name="technologies[]" value="{{$technology->id}}" id="technology-{{$technology->id}}" {{$project->technologies->contains($technology->id) ? "checked": " "}}>
          <label for="technology-{{$technology->id}}">{{$technology->name}}</label>
           </div>
          @endforeach
    </div>

    
      <div class="form-control mb-3 d-flex flex-column">
        <label for="link_github">GitHub</label>
        <input type="text" name="link_github" id="link_github" value="{{$project->link_github}}">
    </div>

     <div class="form-control mb-3 d-flex flex-column">
          <label for="image">Immagine</label>
        <input type="file" name="image" id="image">

                @if($project->image)
                <div>
                    <img class="img-fluid w-25"  src="{{asset("storage/" . $project->image)}}" alt="copertina">
                </div>
                @endif
    </div>



    <input type="submit" value="Salva">


</form>


@endsection

