<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class Petugas15467 extends Authenticatable
{
    use HasFactory;
    protected $table = 'userregist';
    protected $fillable = [
        'nik',
        'name',
        'username',
        'email',
        'password',
        'tlp',

        
    ];
   
}
