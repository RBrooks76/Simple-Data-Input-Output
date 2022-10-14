<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MMP extends Model
{
    use HasFactory;

    protected $table = "tbl_mmp";
    protected $fillable = [
        'make',
        'model',
        'problem'
    ];
}
