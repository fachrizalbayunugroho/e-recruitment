<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form15 extends Model
{
    use HasFactory;
    protected $table = 'form_15';
    protected $fillable = [
        	'name',
        	'dph_plan',
            'dph_actual',
            'dph_dev',
            'hsh_plan',
            'hsh_actual',
            'hsh_dev',
            'osh_plan',
            'osh_actual',
            'osh_dev',
            'off_plan',
            'off_actual',
            'off_dev',
            'ins_plan',
            'ins_actual',
            'ins_dev',
            'jun_plan',
            'jun_actual',
            'jun_dev',
            'par_plan',
            'par_actual',
            'par_dev',
            'adh_plan',
            'adh_actual',
            'adh_dev',            
            'ado_plan',
            'ado_actual',
            'ado_dev',
            'hel_plan',
            'hel_actual',
            'hel_dev'];
}
