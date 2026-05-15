<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology; 
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()  
    {
        $projects = Project::all();

        return view("admin.projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

     
    {
          $types = Type::all();
          $technologies = Technology::all();
        return view("admin.projects.create", compact("types", "technologies"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newProject = new Project();

        $newProject->title = $data['title'];
        $newProject->description = $data['description'];
               $newProject->link_github = $data['link_github'];
         $newProject->type_id = $data['type_id'];


         if(array_key_exists("image", $data)){

            $img_url = Storage::putFile("projects", $data["image"]);
            $newProject->image = $img_url;
         }

        $newProject->save();


if($request->has("technologies")){
     $newProject->technologies()->attach($data["technologies"]);
    }
       

        return redirect()->route("admin.projects.show", $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {

              return view("admin.projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Project $project)

    {
        $types = Type :: all();
        $technologies = Technology::all();
        return view("admin.projects.edit", compact ("project", "types","technologies"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)

    {
        $data = $request->all();

   

        $project->title = $data['title'];
        $project->description = $data['description'];
        $project->link_github = $data['link_github'];
        $project->type_id = $data['type_id'];

        if(array_key_exists("images", $data)){

        Storage::delete($project->image);
         $img_url = Storage::putFile("projects", $data["image"]);
         $project->image = $img_url;

        }

        $project->update();

            if($request->has("technologies")){
                   $project->technologies()->sync($data["technologies"]);  
            } else {
                $project->technologies()->detach();
            }
   

        return redirect()->route("admin.projects.show", $project);




    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
         $project->technologies()->detach();
         
         if($project->image){
            Storage::delete($project->image);
         }
        $project->delete();
        return redirect()->route("admin.projects.index");
    }
}
