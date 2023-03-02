<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    use HasFactory;
    protected $fillable = [ 'kecamatan' ];
    protected $table = 'lokasi_15467';
    public $timestamps = false;
}
