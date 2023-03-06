<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form14 extends Model
{
    use HasFactory;
    protected $table = 'form_14';
    protected $fillable = [
        	'name',
        	'sch_plan',
            'sch_actual',
            'sch_dev'
            'spd_plan',
            'spd_actual',
            'spd_dev',
            'dph_plan',
            'dph_actual',
            'dph_dev',
            'pli_plan',
            'pli_actual',
            'pli_dev',
            'tym_plan',
            'tym_actual',
            'tym_dev',            
            'fgl_plan',
            'fgl_actual',
            'fgl_dev',
            'wel_plan',
            'wel_actual',
            'wel_dev'];
}
