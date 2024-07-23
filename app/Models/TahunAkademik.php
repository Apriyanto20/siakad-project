<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAkademik extends Model
{
    use HasFactory;
      protected $fillable = [
      'kode_tahun_akademik',
      'tahun_akademik'
    ];

protected $table = 'tahun_akademiks';

    public static function createTahunAkademik()
    {
        $latestCode = self::orderBy('kode_tahun_akademik', 'desc')->value('kode_tahun_akademik');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'TA' . $formattedCodeNumber;
    }
}