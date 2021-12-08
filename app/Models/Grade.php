<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'grades';
    protected $fillable = ['grade', 'section'];
    use HasFactory;
    
    public function subjectGrade()
{
    return $this->hasMany(SubjectGrade::class, 'grade_id', 'id');  
}
}


