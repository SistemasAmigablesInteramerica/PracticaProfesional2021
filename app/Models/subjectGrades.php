<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectGrades extends Model
{
    protected $table = 'subject_grades';
    protected $fillable = ['grade_id', 'subject_id']; 
    use HasFactory;
}

    public function Grades()
    {
    return $this->belongsTo(Grades::class, 'grade_id', 'id');
    }
        public function subject()
    {   
    return $this->belongsTo(Subjects::class, 'subject_id', 'id');
    }
    public function gradeSubjectStudents()
    {   
    return $this->belongsTo(gradeSubjectStudents::class, 'subject_grade_id', 'id');  
    }
    public function SubjectTeacher()
    {
    return $this->belongsTo(SubjectTeacher::class, 'subject_grade_id', 'id');
    }
