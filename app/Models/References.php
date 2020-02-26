<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class References extends Model
{
    protected $fillable = ['name','reference','created_by', 'updated_by'];
    protected $guarded = ['id'];


    public function volunteers()
    {
        return $this-> hasMany(Volunteers::class);

    }
}
