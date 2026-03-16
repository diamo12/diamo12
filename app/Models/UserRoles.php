<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    protected $table = 'user_roles';
    
    //
    protected $fillable = [
        'user_id',
        'role_id'
    ];

    // public function roles() {
    //     return $this->hasManyThrough(User::class, UserRoles::class);
    // }

    // public function users() {
    //     return $this->hasManyThrough(Roles::class, UserRoles::class);
    // }
}