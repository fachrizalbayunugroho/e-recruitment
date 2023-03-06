<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form6 extends Model
{
    use HasFactory;
    protected $table = 'form_6';
    protected $fillable = [
        	'name',
            'prod_plan',
            'prod_actual',
            'prod_dev'
            'dpr_plan',
            'dpr_actual',
            'dpr_dev',
            'edh_plan',
            'edh_actual',
            'edh_dev',
            'fodp_plan',
            'fodp_actual',
            'fodp_dev',
            'heo_plan',
            'heo_actual',
            'heo_dev',
            'ins_plan',
            'ins_actual',
            'ins_dev',
            'mpo_plan',
            'mpo_actual',
            'mpo_dev',
            'msh_plan',
            'msh_actual',
            'msh_dev'];
}
