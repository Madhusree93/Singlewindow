<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable=['id', 'student_name', 'testimonial','image','created_at', 'updated_at',];
}
