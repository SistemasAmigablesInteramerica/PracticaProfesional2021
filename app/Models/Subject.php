<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['name'];

    use HasFactory;
    public function subjectGrade()
    {
        return $this->belongsto(SubjectGrade::class, 'subject_id', 'id');
    }

    public function grades()
    {
        return $this->belongsToMany(Grade::class,'subject_grades','subject_id','grade_id');
    }
}
