<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form10 extends Model
{
    use HasFactory;
    protected $table = 'form_10';
    protected $fillable = [
        	'name',
            'hpr_plan',
            'hpr_actual',
            'hpr_dev',
            'ope_plan',
            'ope_actual',
            'ope_dev',
            'pdh_plan',
            'pdh_actual',
            'pdh_dev',
            'she_plan',
            'she_actual',
            'she_dev',
            'shb_plan',
            'shb_actual',
            'shb_dev'];
}
