<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable =['employee_name','employee_age', 'employee_department', 'employee_salary', 'employee_attendance', 'employee_performance'];
}
