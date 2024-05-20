<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollegeWiseCourse extends Model
{
    protected $table="collegewisecourse";
	protected $primaryKey="id";
	protected $fillable=['id','course', 'college', 'total_fees','no_of_seates','eligibility', 'duration','age_limit','created_at','updated_at']; 
}
