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

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function course()
    {
        return $this->belongsTo(course::class, 'id_course', 'id');
    }
}
