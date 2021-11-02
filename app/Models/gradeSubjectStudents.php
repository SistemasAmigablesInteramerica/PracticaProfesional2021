<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeSubjectStudents extends Model
{
    protected $table = 'grade_subject_students';
    protected $fillable = ['subject_grade_id', 'student_id', 'year'];
    use HasFactory;
}
public function SubjectGrade()
{
    return $this->belongsTo(SubjectGrades::class, 'subject_grade_id', 'id');
}
public function Student()
{
    return $this->belongsTo(Students::class, 'student_id', 'id');
}