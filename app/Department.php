<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table="departments";
	protected $primaryKey="id";
	protected $fillable=['id', 'college_id','department_name', 'created_at', 'updated_at',];
}
