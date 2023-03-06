<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form3 extends Model
{
    use HasFactory;
    protected $table = 'form_3';
    protected $fillable = [
        	'name',
            'acl_plan',
            'acl_actual',
            'acl_dev',
            'ccr_plan',
            'ccr_actual',
            'ccr_dev',
            'dpr_plan',
            'dpr_actual',
            'dpr_dev',
            'edh_plan',
            'edh_actual',
            'edh_dev',
            'geo_plan',
            'geo_actual',
            'geo_dev',
            'int_plan',
            'int_actual',
            'int_dev',
            'jmp_plan',
            'jmp_actual',
            'jmp_dev',
            'mpo_plan',
            'mpo_actual',
            'mpo_dev'];
}
