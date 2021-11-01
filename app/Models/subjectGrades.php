<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subjectGrades extends Model
{
    protected $table = 'subject_grades';
    protected $fillable = ['grade_id', 'subject_id']; 
    use HasFactory;
}

    public function grades()
    {
    return $this->belongsTo(grades::class, 'grade_id', 'id');
    }
        public function subject()
    {   
    return $this->belongsTo(subjects::class, 'subject_id', 'id');
    }
    public function gradeSubjectStudents()
    {   
    return $this->HasMany(gradeSubjectStudents::class, 'subject_grade_id', 'id');
    }
