<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfigurasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_konfigurasi',
        'kode_tahun_akademik',
        'kode_keterangan',
        'kode_kurikulum'
    ];

    protected $table = 'konfigurasis';

    public function tahunAkademik()
    {
        return $this->hasMany(TahunAkademik::class, 'kode_tahun_akademik');
    }
    public function keterangan()
    {
        return $this->hasMany(Keterangan::class, 'kode_keterangan');
    }
    public function kurikulum()
    {
        return $this->hasMany(Kurikulum::class, 'kode_kurikulum');
    }
}