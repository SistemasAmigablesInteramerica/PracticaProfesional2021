<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permission';
    protected $fillable = ['title','description'];
    use HasFactory;

    public function permissionRoles()
    {
        return $this->hasMany(PermissionRoles::class, 'grade_id', 'id');  
    }
}
