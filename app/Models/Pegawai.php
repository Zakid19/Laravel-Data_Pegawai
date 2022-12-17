<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'nip', 'nama_lengkap', 'slug', 'image', 'ttl', 'alamat', 'tgll', 'jenis_kelamin', 'agama', 'no_hp', 'npwp', 'jabatan', 'tempat_tugas', 'gol', 'eselon', 'instansi_id'];

    public function instansi()
    {
        return $this->belongsTo('App\Models\Instansi');
    }
}
