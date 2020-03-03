<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institutions extends Model
{
    protected $fillable = ['name','address','phone','postal_code','sector_id','created_by', 'updated_by'];
    protected $guarded = ['id'];


    public function breeds()
    {
        return $this-> belongsTo(sector::class);

    }
}
