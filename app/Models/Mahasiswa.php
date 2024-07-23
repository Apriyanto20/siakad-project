<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
     protected $fillable = [
      'nim',
      'nik',
      'tempat_lahir',
      'tanggal_lahir',
      'jk',
      'dusun',
      'rtrw',
      'kelurahan',
      'kecamatan',
      'kota',
      'kode_pos',
      'no_hp',
      'pendidikan_terakhir',
      'asal_sekolah',
      'jurusan_sekolah',
      'tahun_lulus',
      'kode_kelas',
      'tahun_angkatan'
    ];

protected $table = 'mahasiswas';

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kode_kelas', 'kode_kelas');
    }
}