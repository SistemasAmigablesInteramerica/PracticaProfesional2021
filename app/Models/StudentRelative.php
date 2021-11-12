<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRelative extends Model
{
    protected $table = 'student_relatives';
    protected $fillable = ['student_id', 'guardian_name', 'guardian_card', 'guaridan_profession', 'guardian_relation', 'guardian_receives_aid', 'guardian_aid_total', 'scholarship', 'guardian_salary'];
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id'); 
    }

}


