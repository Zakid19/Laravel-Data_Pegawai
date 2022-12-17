<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'slug', 'email', 'tlp', 'alamat'];

    public function pegawais()
    {
       return $this->hasMany('App\Models\Pegawai', 'instansi_id', 'id');
    }

}

    // Instansi::with('pegawais')->find(1);
