<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SubjectGrade extends Model
{
    protected $table = 'subject_grades';
    protected $fillable = ['grade_id', 'subject_id']; 
    use HasFactory;

    public function grades()
    {
    return $this->belongsTo(Grade::class, 'grade_id', 'id');
    }
        public function subject()
    {   
    return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }
    public function gradeSubjectStudent()
    {   
    return $this->hasMany(GradeSubjectStudent::class, 'subject_grade_id', 'id');  
    }
    public function subjectTeacher()
    {
    return $this->hasMany(SubjectTeacher::class, 'subject_grade_id', 'id');
    }
}

    
