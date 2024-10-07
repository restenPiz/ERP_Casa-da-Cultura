<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_user extends Model
{
    use HasFactory;

    protected $table = 'course_users';

    protected $fillable = [
        'id_course',
        'id_user',
    ];

    public function course()
    {
        return $this->belongsTo(course::class, 'id_course', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
