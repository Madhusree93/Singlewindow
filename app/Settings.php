<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable=['whatsapp','phone', 'alternet_phone', 'address','facebook','instagram','twitter','linkedin','youtube','email']; 
}
