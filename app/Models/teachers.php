<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    
    protected $table = 'teachers';
    protected $fillable = ['names', 'last_names', 'identification', 'birthdate', 'age', 'specialty', 'email', 'gender', 'contact_number'];

    use HasFactory;
}
