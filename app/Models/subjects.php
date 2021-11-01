<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subjects extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['name'];

    use HasFactory;
}
    public function subjectGrades()
    {
        return $this->HasMany(subjectGrades::class, 'subject_id', 'id');
    }