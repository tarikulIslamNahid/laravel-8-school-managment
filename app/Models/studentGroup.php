<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentGroup extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
}
