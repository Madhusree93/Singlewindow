<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notices extends Model
{
    protected $table="notices";
	protected $primaryKey="id";
	protected $fillable=['id', 'title', 'description', 'image','slug','created_at', 'updated_at',];
}
