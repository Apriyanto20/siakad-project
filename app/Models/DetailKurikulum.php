<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKurikulum extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_detail_kurikulum',
        'kode_kurikulum',
        'kode_mata_kuliah'
    ];

    protected $table = 'detail_kurikulums';

    public static function createKelas()
    {
        $latestCode = self::orderBy('kode_detail_kurikulum', 'desc')->value('kode_detail_kurikulum');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'DK' . $formattedCodeNumber;
    }
    public function kurikulum()
    {
        return $this->belongsTo(Kurikulum::class, 'kode_kurikulum', 'kode_kurikulum');
    }
}