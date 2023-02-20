<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table = 'cuti';
    
    protected $fillable = [
        'user_id'
    ];
}
