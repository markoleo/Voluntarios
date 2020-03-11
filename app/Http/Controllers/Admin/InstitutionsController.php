<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InstitutionUpdateRequest;
use App\Http\Requests\InstitutionStoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Institutions;
use Illuminate\Support\Str;

class InstitutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $institution = Institutions::orderBy('name','ASC')->paginate(15);
        return view('admin.institutions.index',compact('institution'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.institutions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstitutionStoreRequest $request)
    {
        //
        Institutions::create([
            'name' => InstitutionsController::ucfirst($request->name),
            'short_name' => InstitutionsController::ucfirst($request->short_name),
            'Project_Type' => InstitutionsController::ucfirst($request->Project_Type),
            'created_by' => 1,
            'updated_by' => 1
        ]);
        return redirect()->route('institutions.index')->with('success','Se ha añadido el nuevo progrma: ' . $request->name);
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
        $institution = Institutions::find($id);
        return view('admin.institutions.edit',compact('institution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InstitutionUpdateRequest $request, $id)
    {
        //
        $institution =  Institutions::find($id);
        $institution->fill([
            'name' => InstitutionsController::ucfirst($request->name),
            'short_name' => InstitutionsController::ucfirst($request->short_name),
            'Project_Type' => InstitutionsController::ucfirst($request->Project_Type),
            'created_by' => 1,
            'updated_by' => 1
        ])->save();

        return redirect()->route('institutions.index')->with('success','Se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private static function ucfirst($string){
        if(empty($string))
            return null;
        else
            return Str::ucfirst($string);
    }
}
