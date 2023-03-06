<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form7 extends Model
{
    use HasFactory;
    protected $table = 'form_7';
    protected $fillable = [
        	'name',
            'apl_plan',
            'apl_actual',
            'apl_dev',
            'hpl_plan',
            'hpl_actual',
            'hpl_dev',
            'lgl_plan',
            'lgl_actual',
            'lgl_dev',
            'lsh_plan',
            'lsh_actual',
            'lsh_dev',
            'mec_plan',
            'mec_actual',
            'mec_dev',
            'mgl_plan',
            'mgl_actual',
            'mgl_dev',
            'meh_plan',
            'meh_actual',
            'meh_dev',
            'pla_plan',
            'pla_actual',
            'pla_dev'];
}
