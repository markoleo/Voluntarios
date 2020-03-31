<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toppings extends Model
{
    protected $fillable = ['volunteer_id','institution_id','project_id','week_id','cob_mean','cob_woman','total_people','created_by', 'updated_by'];
    protected $guarded = ['id'];



    public function volunteer()
    {
        return $this->belongsTo(Volunteers::class);

    }

    public function institution()
    {
        return $this->belongsTo(Institutions::class);

    }

    public function project()
    {
        return $this->belongsTo(Project::class);

    }

    public function week()
    {
        return $this->belongsTo(Week::class);

    }



    public function scopeVolunteer($query, $volunteers){

        if($volunteers)
            return $query->where('volunteer_id', $volunteers);

        // return $query->where('volunteer_id', 1);
    }

    public function scopeInstitution($query, $institutions){

        if($institutions)
            return $query->where('institution_id', $institutions);

       // return $query->where('institution_id', 1);
    }



    public function scopeProject($query, $projects){

        if($projects)
            return $query->where('project_id', $projects);

        // return $query->where('project_id', 1);
    }

    public function scopeWeek($query, $weeks){

        if($weeks)
            return $query->where('week_id', $weeks);

        // return $query->where('week_id', 1);
    }
}
