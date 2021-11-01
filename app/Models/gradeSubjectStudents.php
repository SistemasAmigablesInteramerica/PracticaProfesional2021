<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gradeSubjectStudents extends Model
{
    protected $table = 'grade_subject_students';
    protected $fillable = ['subject_grade_id', 'student_id', 'year'];
    use HasFactory;
}
public function subjectGrade()
{
    return $this->belongsTo(subject_grades::class, 'subject_grade_id', 'id');
}
public function student()
{
    return $this->BelongsTo(students::class, 'student_id', 'id');
}