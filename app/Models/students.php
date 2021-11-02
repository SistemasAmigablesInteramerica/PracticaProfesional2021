<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table ='students';
    protected $fillable = ['name', 'nationality', 'card', 'salarial_constance', 'legal_guardian_name', 'legal_guardian_card', 'place_residence', 'phone_number', 'socioeconomic_status', 'family_member_total', 'total_per_capita', 'clasification', 'financial_assistance', 'voluntary_assistance', 'rental_income', 'others_income'];
    use HasFactory;
}

public function StudentRelative()
{
    return $this->hasMany(StudentRelative::class, 'student_id', 'id');
}

public function AttendanceHistorie()
{
    return $this->hasMany(AttendanceHistorie::class, 'student_id', 'id');
}

