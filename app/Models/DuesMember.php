<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuesMember extends Model
{
    use HasFactory;

    protected $fillable = ['iduser', 'idduescategory'];

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }

    public function dues_category()
    {
        return $this->belongsTo(DuesCategory::class, 'idduescategory');
    }
}
