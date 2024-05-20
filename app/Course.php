<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table="course";
	protected $primaryKey="id";
	protected $fillable=['id','course_name','course_type','college_id','department_id','slug','course_photo','number_of_seats','course_duration','eligibility','meta_tag','meta_description','description', 'created_at', 'updated_at',]; 
}
