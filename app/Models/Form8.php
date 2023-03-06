<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form8 extends Model
{
    use HasFactory;
    protected $table = 'form_8';
    protected $fillable = [
        	'name',
            'off_plan',
            'off_actual',
            'off_dev',
            'ins_plan',
            'ins_actual',
            'ins_dev',
            'ito_plan',
            'ito_actual',
            'ito_dev'];
}
