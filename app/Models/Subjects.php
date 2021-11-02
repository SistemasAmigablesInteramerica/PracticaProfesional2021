<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['name'];

    use HasFactory;
}
    public function SubjectGrades()
    {
        return $this->hasMany(SubjectGrades::class, 'subject_id', 'id');
    }