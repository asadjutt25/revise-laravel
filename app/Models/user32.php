<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user32 extends Model
{
    // Table ka exact name
    protected $table = 'user32s';

    // Kyun ke table me created_at / updated_at nahi hain
    public $timestamps = false;

    // Mass assignment allow
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];
}
