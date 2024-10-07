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
        'Price',
        'Goals',
        'Upload_file',
        'Upload_video',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_users', 'id_course', 'id_user');
    }
}
