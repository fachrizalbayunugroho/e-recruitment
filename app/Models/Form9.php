<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form9 extends Model
{
    use HasFactory;
    protected $table = 'form_9';
    protected $fillable = [
        	'name',
            'acl_plan',
            'acl_actual',
            'acl_dev',
            'dri_plan',
            'dri_actual',
            'dri_dev',
            'gle_plan',
            'gle_actual',
            'gle_dev',
            'hel_plan',
            'hel_actual',
            'hel_dev',
            'ope_plan',
            'ope_actual',
            'ope_dev',
            'sch_plan',
            'sch_actual',
            'sch_dev'];
}
