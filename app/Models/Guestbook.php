<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guestbook extends Model
{
    protected $table = 'guestbook';
    
    //
    protected $fillable = [
        'name',
        'website-url',
        'message',
        'created_at',
        'updated_at'
    ];
}
