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
    public static function createKonfigurasi()
    {
        $latestCode = self::orderBy('kode_konfigurasi', 'desc')->value('kode_konfigurasi');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'KN' . $formattedCodeNumber;
    }

    public function tahunAkademik()
    {
        return $this->belongsTo(TahunAkademik::class, 'kode_tahun_akademik', 'kode_tahun_akademik');
    }
    public function keterangan()
    {
        return $this->belongsTo(Keterangan::class, 'kode_keterangan', 'kode_keterangan');
    }
    public function kurikulum()
    {
        return $this->belongsTo(Kurikulum::class, 'kode_kurikulum', 'kode_kurikulum');
    }
}