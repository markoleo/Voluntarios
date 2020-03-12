<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VolunteerStoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Volunteers;
use App\Models\References;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VolunteersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $references = $request->get('references');

        $reference= References::orderBy('name','ASC')->pluck('name','id');

        $volunteers = Volunteers::orderBy('name','ASC')
            ->references($references)
            ->paginate(15)
            ->appends('references',$references);
        return view('admin.volunteers.index',compact('reference','volunteers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $references = References::orderBy('name','ASC')->pluck('name','id');
        return view('admin.volunteers.create',compact('references'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VolunteerStoreRequest $request)
    {
        //
        Volunteers::create([
            'key' => $request->key,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'second_name' => $request->second_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'references_id' => $request->references_id,
            'created_by' => 1,
            'updated_by' => 1
        ]);
        return redirect()->route('volunteers.index')->with('success','Se ha añadido el nuevo voluntario: ' . $request->name);
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
        $volunteers = Volunteers::find($id);
        $references = References::orderBy('name','ASC')->pluck('name','id');
        return view('admin.volunteers.edit',compact('volunteers','references'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VolunteerStoreRequest $request, $id)
    {
        //
        $volunteer =  Volunteers::find($id);
        $volunteer->fill([
            'key' => $request->key,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'second_name' => $request->second_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'references_id' => $request->references_id,
            'created_by' => 1,
            'updated_by' => 1
        ])->save();

        return redirect()->route('volunteers.index')->with('success','Se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $volunteer= Volunteers::find($id);
        $volunteer->fill([
                 'key' => $volunteer->key,
                 'name' => $volunteer->name,
                 'last_name' => $volunteer->last_name,
                 'second_name' => $volunteer->second_name,
                 'address' => $volunteer->address,
                 'phone' => $volunteer->phone,
                 'references_id' =>$volunteer->references_id,
                 'created_by' => 1,
                 'updated_by' => 1
             ])->delete();

        return redirect()->route('volunteers.index')->with('success','Se ha eliminado al voluntario' . $volunteer->name);
    }


}
