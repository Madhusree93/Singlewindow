<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    protected $table = "placements";
     protected $fillable=['title','image']; 
}
