<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'Date',
        'Location',
        'Number_of_speaker',
        'Hour',
        'Description',
        'Event_picture',
        'Id_artist',
    ];
}
