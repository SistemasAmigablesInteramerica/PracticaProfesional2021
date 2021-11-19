<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $table = 'employment';
    protected $fillable = ['email', 'name', 'speciality', 'card', 'phone_number', 'place_residence', 'titles', 'do_work', 'in_empleocr', 'conditions', 'place_likeness', 'graduate_status'];
    use HasFactory;
}
