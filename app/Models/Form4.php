<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form4 extends Model
{
    use HasFactory;
    protected $table = 'form_4';
    protected $fillable = [
        	'name',
        	'acl_plan',
            'acl_actual',
            'acl_dev',
            'ccr_plan',
            'ccr_actual',
            'ccr_dev',
            'dri_plan',
            'dri_actual',
            'dri_dev',
            'ele_plan',
            'ele_actual',
            'ele_dev',
            'gle_plan',
            'gle_actual',
            'gle_dev',
            'hel_plan',
            'hel_actual',
            'hel_dev',
            'ins_plan',
            'ins_actual',
            'ins_dev',
            'mek_plan',
            'mek_actual',
            'mek_dev',
            'mkm_plan',
            'mkm_actual',
            'mkm_dev',            
            'oil_plan',
            'oil_actual',
            'oil_dev',
            'pla_plan',
            'pla_actual',
            'pla_dev'];
}
