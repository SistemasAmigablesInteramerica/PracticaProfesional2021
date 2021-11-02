<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    protected $table = 'grades';
    protected $fillable = ['name', 'section'];
    use HasFactory;
}


public function SubjectGrades()
{
    return $this->hasMany(SubjectGrades::class, 'grade_id', 'id');  
}