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
    return $this->hasOne(grades::class, 'id', 'grade_id');
}

public function subjects()
{
    return $this->hasOne(subjects::class, 'id', 'subject_id');
}
