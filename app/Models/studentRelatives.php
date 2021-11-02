<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRelatives extends Model
{
    protected $table = 'student_relatives';
    protected $fillable = ['student_id', 'guardian_name', 'card_id', 'guaridan_profession', 'guardian_relation', 'guardian_receives_aid', 'guardian_aid_total', 'scholarship', 'guardian_salary'];
    use HasFactory;
}

public function Student()
{
    return $this->belongsTo(Students::class, 'student_id', 'id'); 
}
