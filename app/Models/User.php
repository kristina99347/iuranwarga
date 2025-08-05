<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name', 'username', 'password', 'nohp', 'address', 'level',
    ];

    protected $hidden = [
        'password',
    ];

    public function officer()
    {
        return $this->hasOne(Officer::class, 'iduser');
    }

    public function dues_members()
    {
        return $this->hasMany(DuesMember::class, 'iduser');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'iduser');
    }
}
