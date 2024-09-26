<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'Course_name',
        'Description',
        'Upload_file',
        'Upload_video'
    ];

    public function course_course()
    {
        return $this->hasMany(course_user::class, 'id_course', 'id');
    }
}
