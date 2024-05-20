<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminCareer extends Model
{
    protected $table="careerpost";
	protected $primaryKey="id";
	protected $fillable=['id','title', 'description','status','created_at', 'updated_at',]; 
}
	