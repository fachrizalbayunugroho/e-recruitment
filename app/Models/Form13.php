<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form13 extends Model
{
    use HasFactory;
    protected $table = 'form_13';
    protected $fillable = [
        	'name',
        	'ssh_plan',
            'ssh_actual',
            'ssh_dev'
            'moo_plan',
            'moo_actual',
            'moo_dev',
            'sch_plan',
            'sch_actual',
            'sch_dev',
            'pgl_plan',
            'pgl_actual',
            'pgl_dev',
            'prh_plan',
            'prh_actual',
            'prh_dev',
            'rod_plan',
            'rod_actual',
            'rod_dev',            
            'sur_plan',
            'sur_actual',
            'sur_dev',
            'tpo_plan',
            'tpo_actual',
            'tpo_dev'];
}
