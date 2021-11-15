<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectTeacher extends Model
{
    protected $table = 'subject_teachers';
    protected $fillable = ['subject_grade_id', 'teacher_id', 'year'];
    use HasFactory;

    public function subjectGrade()
{
    return $this->belongsTo(SubjectGrade::class, 'subject_grade_id', 'id');
}
public function teacher()
{
    return $this->belongsTo(Teacher::class, 'teacher_id', 'id'); 
} 
}

 