<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProjectUpdateRequest;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Support\Str;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::orderBy('id')->paginate(10);
        return view('admin.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectStoreRequest $request)
    {

        Project::create([
            'name' => $request->name,
            'short_name' => $request->short_name,
            'Project_Type' => $request->Project_Type,
            'created_by' => 1,
            'updated_by' => 1
        ]);
        return redirect()->route('projects.index')->with('success','Se ha añadido el nuevo proyecto: ' . $request->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $projects = Project::find($id);
        return view('admin.projects.edit',compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectUpdateRequest $request, $id)
    {
        //
        $project =  Project::find($id);
        $project->fill([
            'name' => $request->name,
            'short_name' => $request->short_name,
            'Project_Type' => $request->Project_Type,
            'created_by' => 1,
            'updated_by' => 1
        ])->save();

        return redirect()->route('projects.index')->with('success','Se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project =  Project::find($id);
        $project->fill([
            'name' => $project->name,
            'short_name' => $project->short_name,
            'Project_Type' => $project->Project_Type,
            'created_by' => 1,
            'updated_by' => 1
        ])->delete();

        return redirect()->route('projects.index')->with('success','Se ha eliminado el proyecto' . $project->name);

    }


}
