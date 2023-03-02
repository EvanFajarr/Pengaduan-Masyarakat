<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;
    protected $fillable = [ 'user_id','tanggal', 'nik','isi','lokasi','foto','detail_lokasi'];
    protected $table = 'pengaduan_15467';
    public function tanggapan()
    {
        return $this->belongsTo(pengaduan::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
}
