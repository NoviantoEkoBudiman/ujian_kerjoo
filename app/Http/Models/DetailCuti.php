<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class DetailCuti extends Model
{
    protected $table = 'detail_cuti';
    
    protected $fillable = [
        'cuti_id',
        'tanggal_cuti',
        'status',
    ];
}
