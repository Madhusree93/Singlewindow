<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    protected $table="videogallery";
	protected $primaryKey="id";
	protected $fillable=['id', 'link', 'created_at', 'updated_at',];
}
