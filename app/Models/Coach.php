<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'coaches';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
