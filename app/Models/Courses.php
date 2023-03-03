<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Courses extends Model
{
    use HasFactory , SoftDeletes;
    protected $guarded = [];
    protected $table = 'courses';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public function coach()
    {
        return $this->belongsTo(Coach::class)->withDefault();
    }
}
