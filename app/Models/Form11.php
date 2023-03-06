<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form11 extends Model
{
    use HasFactory;
    protected $table = 'form_11';
    protected $fillable = [
        	'name',
            'moo_plan',
            'moo_actual',
            'moo_dev',
            'rod_plan',
            'rod_actual',
            'rod_dev',
            'she_plan',
            'she_actual',
            'she_dev',
            'shm_plan',
            'shm_actual',
            'shm_dev',
            'sho_plan',
            'sho_actual',
            'sho_dev',
            'shs_plan',
            'shs_actual',
            'shs_dev',
            'sur_plan',
            'sur_actual',
            'sur_dev'];
}
