<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name','short_name','Project_Type','created_by', 'updated_by'];
    protected $guarded = ['id'];


    public function volunteers()
    {
        return $this-> hasMany(Toppings::class);

    }
}
