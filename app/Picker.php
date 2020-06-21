<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picker extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'age', 'lat', 'lng', 'mtrimage',
    ];
}
