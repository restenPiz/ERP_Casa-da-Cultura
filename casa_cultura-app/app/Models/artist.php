<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    use HasFactory;

    protected $table = 'artist';

    protected $fillable = [
        'Name',
        'Address',
        'Cell_number',
        'Activity'
    ];
}
