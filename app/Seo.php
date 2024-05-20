<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $table="seo_settings";
	protected $primaryKey="id";
	protected $fillable=['id', 'google_analitics', 'google_search_console','created_at', 'updated_at',];
}
