<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schoolSubject extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
}