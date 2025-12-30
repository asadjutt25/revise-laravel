<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    // Specify the table name since it's not plural 'students'
    protected $table = 'student';

    // (Optional) Specify fillable fields if you want mass assignment
    protected $fillable = ['name', 'email', 'phone'];  // adjust based on your columns

    function testfun(){
        return "this is dmmy fuction";
    }
}
