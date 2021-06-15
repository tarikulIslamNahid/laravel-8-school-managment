<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentFeeAmount extends Model
{
    use HasFactory;
    public function fee_cat(){
        return $this->belongsTo(studentFeeCategory::class,'fee_cat_id','id');
    }
}
