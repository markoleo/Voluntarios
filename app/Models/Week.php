<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $fillable = ['week'];
    protected $guarded = ['id'];


    public function toppings()
    {
        return $this-> hasMany(Toppings::class);

    }
}
