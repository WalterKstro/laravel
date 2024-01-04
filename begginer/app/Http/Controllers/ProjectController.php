<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectForm;
use App\Models\Project;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',[
            'except' =>['index','show']
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('projects.index',[
            "projects" => Project::paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("projects.create",[
            'project' => new Project()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectForm $request)
    {
        Project::create( $request->validated() );
        return to_route("projects.index")->with('message','Project created success');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show',[
            "project" => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit',[
            "project" => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Project $project, ProjectForm $request)
    {
        //
        $project->update( $request->validated() );
        return to_route("projects.show",$project)->with('message','Project updated success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return to_route("projects.index");
    }
}
