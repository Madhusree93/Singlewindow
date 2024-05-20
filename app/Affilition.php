<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affilition extends Model
{
    protected $table="affiliations";
	protected $primaryKey="id";
	protected $fillable=['id','title', 'file', 'status', 'created_at', 'updated_at',]; 
}
