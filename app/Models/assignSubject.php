<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignSubject extends Model
{
    use HasFactory;
    protected $fillable = [
        'class_id', 'subject_id', 'full_mark', 'pass_mark'
    ];

    public function student_class()
    {
        return $this->belongsTo(studentClass::class, 'class_id', 'id');
    }

    public function school_subject()
    {
        return $this->belongsTo(SchoolSubject::class, 'subject_id', 'id');
    }
}
