<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table="blogs";
	protected $primaryKey="id";
	protected $fillable=['id','title', 'image', 'short_description','meta_tag','meta_description','slug','description', 'created_at', 'updated_at',]; 
}
