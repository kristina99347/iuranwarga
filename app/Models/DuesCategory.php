<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuesCategory extends Model
{
    use HasFactory;

    protected $fillable = ['period', 'nominal', 'status'];

    public function dues_members()
    {
        return $this->hasMany(DuesMember::class, 'idduescategory');
    }
}
