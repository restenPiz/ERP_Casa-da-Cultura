<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class value extends Model
{
    use HasFactory;

    protected $table = 'values';

    protected $fillable = [
        'id',
        'First',
        'Second',
        'Third'
    ];

    public function users()
    {
        return $this->belongsTo(user::class, 'id_user', 'id');
    }
}
