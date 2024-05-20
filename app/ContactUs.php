<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table="contact_us";
	protected $primaryKey="id";
	protected $fillable=['id','name', 'email','phone','subject','message','created_at', 'updated_at',]; 

}
