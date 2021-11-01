<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grades extends Model
{
    protected $table = 'grades';
    protected $fillable = ['name', 'section'];
    use HasFactory;
}


public function subjectGrades()
{
    return $this->HasMany(subjectGrades::class, 'grade_id', 'id');
}