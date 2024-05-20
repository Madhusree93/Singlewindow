<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $table="homepage_setting";
	protected $primaryKey="id";
	protected $fillable=['id', 'slider_1', 'slider_2', 'slider_3','box1_title', 'box1_content','box1_link','box2_title', 'box2_content','box2_link','box3_title', 'box3_content','box3_link','box4_title', 'box4_content','box4_link','about_section_title', 'about_section_sub_title','about_section_content','about_second_image','about_first_image','point1','point2','point3','college_count','updated_at',];
}
