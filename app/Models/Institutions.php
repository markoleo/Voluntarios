<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institutions extends Model
{
    protected $fillable = ['name','address','phone','postal_code','sector_id','created_by', 'updated_by'];
    protected $guarded = ['id'];


    public function sector()
    {
        return $this-> belongsTo(Sector::class);

    }

    public function toppings()
    {

        return $this->hasMany(Toppings::class);

    }

    public function scopeSector($query, $sector){

        if($sector)
            return $query->where('sector_id', $sector);

       // return $query->where('sector_id');
    }
}
