<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table="career";
	protected $primaryKey="id";
	protected $fillable=['id','applied_for','name', 'email', 'phone','address','cv','message', 'created_at', 'updated_at',]; 
}
