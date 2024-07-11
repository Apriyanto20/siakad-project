<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
     protected $fillable = [
      'kode_jurusan',
      'jurusan'
    ];

protected $table = 'jurusans';

    public static function createJurusan()
    {
        $latestCode = self::orderBy('kode_jurusan', 'desc')->value('kode_jurusan');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'J' . $formattedCodeNumber;
    }
    public function kelas(){
        return $this->hasMany(Kelas::class, 'kode_jurusan', 'id');
    }
}