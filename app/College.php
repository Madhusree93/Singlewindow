<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model

{
    protected $table="colleges";
	protected $primaryKey="id";
	protected $fillable=['id','college_id', 'college_website','college_description','college_estd','location', 'college_contact_number','slug','cover_photo','created_at','updated_at']; 
}

