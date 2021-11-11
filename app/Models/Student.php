<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table ='students';
    protected $fillable = ['name', 'nationality', 'birthdate', 'card', 'salarial_constance', 'legal_guardian_name', 'legal_guardian_card', 'place_residence', 'phone_number', 'socioeconomic_status', 'family_member_total', 'total_per_capita', 'clasification', 'financial_assistance', 'voluntary_assistance', 'rental_income', 'others_income'];
    use HasFactory;

public function studentRelative()
{
    return $this->hasMany(StudentRelative::class, 'student_id', 'id');
}

public function attendanceHistory()
{
    return $this->hasMany(AttendanceHistory::class, 'student_id', 'id');
}

}


