<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    protected $fillable=['id', 'title', 'slug','name','description','image','designation','seo_title','seo_description','canonical_tag','created_at', 'updated_at',];
}
