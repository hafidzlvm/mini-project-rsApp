<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawatJalan extends Model
{
    use HasFactory;
    protected $table = 'rawat_jalan';
    protected $primaryKey = 'id_rawat_jalan';
    protected $guarded = [];
    protected $attributes = [
        'status' => '-'
    ];
}
