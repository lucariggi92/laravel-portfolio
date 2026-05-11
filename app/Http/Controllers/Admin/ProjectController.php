<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Project;

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
        return view("admin.projects.create");
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
        $newProject->technologies = $data['technologies'];
        $newProject->link_github = $data['link_github'];

        $newProject->save();

        return redirect()->route("admin.projects.show", $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $project = Project::find($id);
              return view("admin.projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Project $project)

    {
        return view("admin.projects.edit", compact ("project"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)

    {
        $data = $request->all();

   

        $project->title = $data['title'];
        $project->description = $data['description'];
        $project->technologies = $data['technologies'];
        $project->link_github = $data['link_github'];

        $project->update();

        return redirect()->route("admin.projects.show", $project);




    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route("admin.projects.index");
    }
}
