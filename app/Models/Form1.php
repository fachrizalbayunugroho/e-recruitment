<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form1 extends Model
{
    use HasFactory;
    protected $table = 'form_1';
    protected $fillable = ['name','pm_plan','pm_actual','pm_dev','dpm_plan','dpm_actual','dpm_dev'];
}
