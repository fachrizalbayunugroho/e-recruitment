<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form5 extends Model
{
    use HasFactory;
    protected $table = 'form_5';
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
            'mpr_plan',
            'mpr_actual',
            'mpr_dev',
            'dph_plan',
            'dph_actual',
            'dph_dev',
            'sch_plan',
            'sch_actual',
            'sch_dev',
            'sto_plan',
            'sto_actual',
            'sto_dev'];
}
