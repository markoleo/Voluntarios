<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InstitutionUpdateRequest;
use App\Http\Requests\InstitutionStoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Institutions;
use App\Models\Sector;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class InstitutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $sector = $request->get('sector');

        $sectors= Sector::orderBy('id')->pluck('name','id');

        $institution = Institutions::orderBy('name','ASC')
            ->sector($sector)
            ->paginate(15)
            ->appends('sector',$sector);
        return view('admin.institutions.index',compact('sectors','institution'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sector = Sector::orderBy('id')->pluck('name','id');
        return view('admin.institutions.create',compact('sector'));
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
            'name' => $request->name,
            'address' =>$request->address,
            'phone' => $request->phone,
            'postal_code' =>$request->postal_code,
            'sector_id' => $request->sector_id,
            'created_by' => 1,
            'updated_by' => 1
        ]);
        return redirect()->route('institutions.index')->with('success','Se ha añadido el nueva institucion: ' . $request->name);
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
        $sector = Sector::orderBy('id')->pluck('name','id');
        $institution = Institutions::find($id);
        return view('admin.institutions.edit',compact('sector','institution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InstitutionStoreRequest $request, $id)
    {
        //
        $institution =  Institutions::find($id);
        $institution->fill([
            'name' => $request->name,
            'address' =>$request->address,
            'phone' => $request->phone,
            'postal_code' =>$request->postal_code,
            'sector_id' => $request->sector_id,
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
        $institution= Institutions::find($id);
        $institution->fill([
            'name' => $institution->name,
            'address' =>$institution->address,
            'phone' => $institution->phone,
            'postal_code' =>$institution->postal_code,
            'sector_id' => $institution->sector_id,
            'created_by' => 1,
            'updated_by' => 1
        ])->delete();

        return redirect()->route('institutions.index')->with('success','Se ha eliminado el instituto ' . $institution->name);
    }


}
