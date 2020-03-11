<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = ['name','category','created_by', 'updated_by'];
    protected $guarded = ['id'];


    public function institution()
    {
        return $this-> hasMany(Institutions::class);

    }
}
