<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function course()
    {
        return $this->belongsTo(Courses::class)->withDefault();
    }

    public function coach()
    {
        return $this->belongsTo(Coach::class)->withDefault();
    }
    public function degree()
    {
        return $this->belongsTo(Degree::class)->withDefault();
    }
}
