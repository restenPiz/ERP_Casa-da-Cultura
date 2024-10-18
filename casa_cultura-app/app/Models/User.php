<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements LaratrustUser
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRolesAndPermissions;

    protected $fillable = [
        'name',
        'email',
        'password',
        'Surname',
        'age',
        'Date_of_birth',
        'bi',
        'place',
        'contact',
        'user_type',
        'upload_file',
        'function',
        'status'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function courses()
    {
        return $this->belongsToMany(\App\Models\course::class, 'course_users', 'id_user', 'id_course')
            ->withTimestamps();
    }
}
