<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryTab extends Model
{
    protected $table="gallery_tabs";
	protected $primaryKey="id";
	protected $fillable=['id', 'tab_name', 'status', 'created_at', 'updated_at',];
}
