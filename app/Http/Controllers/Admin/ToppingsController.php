<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ToppingsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Http\Requests\ToppingStoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Volunteers;
use App\Models\Institutions;
use App\Models\Project;
use App\Models\Week;
use App\Models\Toppings;
use Illuminate\Support\Str;

class ToppingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $volunteers = $request->get('volunteers');

        $institutions = $request->get('institutions');

        $projects = $request->get('projects');

        $weeks = $request->get('weeks');

        $volunteer= Volunteers::orderBy('name','ASC')->pluck('name','id');
        $institution= Institutions::orderBy('name','ASC')->pluck('name','id');
        $project= Project::orderBy('id')->pluck('name','id');
        $week= Week::orderBy('id')->pluck('week','id');


        $toppings = Toppings::orderBy('id')
            ->volunteer($volunteers)
            ->institution($institutions)
            ->project($projects)
            ->week($weeks)
            ->paginate(15)
            ->appends('volunteers',$volunteers)
            ->appends('institutions',$institutions)
            ->appends('projects',$projects)
            ->appends('weeks',$weeks);


        return view('admin.toppings.index',compact('volunteer','institution','project','week','toppings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $volunteers= Volunteers::orderBy('name','ASC')->pluck('name','id');
        $institution= Institutions::orderBy('name','ASC')->pluck('name','id');
        $project= Project::orderBy('id')->pluck('name','id');
        $week= Week::orderBy('id')->pluck('week','id');
        return view('admin.toppings.create',compact('volunteers','institution','project','week'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ToppingStoreRequest $request)
    {
        //
        Toppings::create([
            'volunteer_id' => $request->volunteer_id,
            'institution_id' =>$request->institution_id,
            'project_id' => $request->project_id,
            'week_id' => $request->week_id,
            'cob_mean' =>$request->cob_mean,
            'cob_woman' => $request->cob_woman,
            'total_people' => $request->total_people
        ]);
        return redirect()->route('toppings.index')->with('success','Se ha añadido la cobertura');
    }


    public function exportExcel(){

        return Excel::download(new ToppingsExport, 'lista-coberturas.xlsx');
    }
}
