<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    
    //
    protected $fillable = [
        'role',
        'description'
    ];

    public function users() {
        return $this->hasManyThrough(User::class, UserRoles::class);
    }
}
