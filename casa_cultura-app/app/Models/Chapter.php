<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $table = 'chapters';

    protected $fillable = [
        'Title',
        'Description',
        'Chapter_file',
        'id_course'
    ];

    public function courses()
    {
        return $this->belongsTo(course::class, 'id_course', 'id');
    }
}
