<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteers extends Model
{
    protected $fillable = ['key','name','last_name','second_name','address','phone','references_id','created_by', 'updated_by'];
    protected $guarded = ['id'];


    public function references()
    {
        return $this->belongsTo(References::class);

    }

    public function toppings()
    {

        return $this->hasMany(Toppings::class);

    }
    public function scopeReferences($query, $references){

        if($references)
            return $query->where('references_id', $references);

        return $query->where('references_id', 2);
    }
}
