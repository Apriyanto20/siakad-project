<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_kurikulum',
        'kurikulum',
        'tahun'
    ];

    protected $table = 'kurikulums';

    public static function createkurikulum()
    {
        $latestCode = self::orderBy('kode_kurikulum', 'desc')->value('kode_kurikulum');
        $latestCodeNumber = intval(substr($latestCode, 3));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'KRM' . $formattedCodeNumber;
    }
    public function Konfigurasi()
    {
        return $this->hashMany(Konfigurasi::class, 'kode_konfigurasi');
    }
    public function detailKurikulum()
    {
        return $this->hasMany(DetailKurikulum::class, 'kode_kurikulum');
    }
}