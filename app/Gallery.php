<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table="galleries";
	protected $primaryKey="id";
	protected $fillable=['id', 'title', 'image', 'description', 'tab_name', 'status', 'created_at', 'updated_at',];
}
