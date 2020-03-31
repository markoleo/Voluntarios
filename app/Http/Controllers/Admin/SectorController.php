<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\SectorUpdateRequest;
use App\Http\Requests\SectorStoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Sector;
use Illuminate\Support\Str;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sectors = Sector::orderBy('id')->paginate(10);
        return view('admin.sector.index',compact('sectors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.sector.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SectorStoreRequest $request)
    {

        Sector::create([
            'name' => $request->name,
            'category' => $request->category,
            'created_by' => 1,
            'updated_by' => 1
        ]);
        return redirect()->route('sector.index')->with('success','Se ha añadido el nuevo sector: ' . $request->name);
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
        $sectors = Sector::find($id);
        return view('admin.sector.edit',compact('sectors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SectorUpdateRequest $request, $id)
    {
        //
        $sectors =  Sector::find($id);
        $sectors->fill([
            'name' => ($request->name),
            'category' => ($request->category),
            'created_by' => 1,
            'updated_by' => 1
        ])->save();

        return redirect()->route('sector.index')->with('success','Se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sector= Sector::find($id);
        $sector->fill([
            'name' => $sector->name,
            'name' => $sector->name,
            'created_by' => 1,
            'updated_by' => 1
        ])->delete();

        return redirect()->route('sector.index')->with('success','Se ha eliminado el sector' . $sector->name);
    }


}
