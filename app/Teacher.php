<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable=['id', 'faculty_name', 'designation', 'image', 'created_at', 'updated_at',];
}
