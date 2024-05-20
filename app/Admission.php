<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $table="admission";
	protected $primaryKey="id";
	protected $fillable=['id','name','date_of_birth','emailid','phone','father_name','father_occupation','full_address','10th_calss_board','10thfullMarks','10thobtainedMarks','10thpercentage','12th_calss_board','12thfullMarks','12thobtainedMarks','12thpercentage','subject1','subject2','subject3','subject4','subject5','subject6','college','course','message','created_at', 'updated_at',]; 
}
