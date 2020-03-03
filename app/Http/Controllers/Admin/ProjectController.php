<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReferencesUpdateRequest;
use App\Http\Requests\ReferencesStoreRequest;
use App\Http\Controllers\Controller;
use App\Models\References;
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
        $references = References::orderBy('name','ASC')->paginate(15);
        return view('admin.references.index',compact('references'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.references.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReferencesStoreRequest $request)
    {
        //
        References::create([
            'name' => ReferencesController::ucfirst($request->name),
            'reference' => ReferencesController::ucfirst($request->reference),
            'created_by' => 1,
            'updated_by' => 1
        ]);
        return redirect()->route('references.index')->with('success','Se ha añadido el nuevo progrma: ' . $request->name);
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
        $reference = References::find($id);
        return view('admin.references.edit',compact('reference'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReferencesUpdateRequest $request, $id)
    {
        //
        $reference =  Specie::find($id);
        $reference->fill([
            'name' => ReferencesController::ucfirst($request->name),
            'reference' => ReferencesController::ucfirst($request->reference),
            'created_by' => 1,
            'updated_by' => 1
        ])->save();

        return redirect()->route('references.index')->with('success','Se ha actualizado correctamente');
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
