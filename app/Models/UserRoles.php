<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    protected $table = 'user_roles';
    protected $fillable = ['user_id','role_id']; 
    use HasFactory;

    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
 
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }

}
