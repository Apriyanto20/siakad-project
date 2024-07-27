<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_keterangan',
        'keterangan'
    ];

    protected $table = 'keterangans';

    public static function createketerangan()
    {
        $latestCode = self::orderBy('kode_keterangan', 'desc')->value('kode_keterangan');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'KET' . $formattedCodeNumber;
    }
    public function Konfigurasi()
    {
        return $this->belongsTo(Konfigurasi::class, 'kode_konfigurasi', 'kode_konfigurasi');
    }
}