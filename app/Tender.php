<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    protected $table="tenders";
	protected $primaryKey="id";
	protected $fillable=['id', 'title', 'description', 'image','slug','date','created_at', 'updated_at',];
}
