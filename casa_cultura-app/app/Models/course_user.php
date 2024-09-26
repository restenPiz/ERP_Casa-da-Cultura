<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_user extends Model
{
    use HasFactory;

    protected $table = 'course_users';

    protected $fillable = [
        'id_course',
        'id_user',
    ];
}
