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
public function subject_grades()
{
    return $this->HasMany(subject_grades::class, 'id', 'subject_grade_id');
}
public function students(){
    return $this->HasOne(students::class, 'id', 'student_id');
}