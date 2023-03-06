<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form2 extends Model
{
    use HasFactory;
    protected $table = 'form_2';
    protected $fillable = [
        	'name',
            'acl_plan',
            'acl_actual',
            'acl_dev',
            'bla_plan',
            'bla_actual',
            'bla_dev',
            'dri_plan',
            'dri_actual',
            'dri_dev',
            'dum_plan',
            'dum_actual',
            'dum_dev',
            'gle_plan',
            'gle_actual',
            'gle_dev',
            'hbl_plan',
            'hbl_actual',
            'hbl_dev'];
}
