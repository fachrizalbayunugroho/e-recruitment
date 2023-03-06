<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form12 extends Model
{
    use HasFactory;
    protected $table = 'form_12';
    protected $fillable = [
        	'name',
        	'pdh_plan',
            'pdh_actual',
            'pdh_dev',
            'sap_plan',
            'sap_actual',
            'sap_dev',
            'sec_plan',
            'sec_actual',
            'sec_dev',
            'sup_plan',
            'sup_actual',
            'sup_dev',
            'too_plan',
            'too_actual',
            'too_dev',
            'tra_plan',
            'tra_actual',
            'tra_dev',
            'trm_plan',
            'trm_actual',
            'trm_dev',
            'tyr_plan',
            'tyr_actual',
            'tyr_dev',
            'was_plan',
            'was_actual',
            'was_dev',            
            'wel_plan',
            'wel_actual',
            'wel_dev',
            'whe_plan',
            'whe_actual',
            'whe_dev'];
}
