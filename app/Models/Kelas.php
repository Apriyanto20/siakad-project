<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
     protected $fillable = [
      'kode_kelas',
      'kode_jurusan',
      'kelas'
    ];

protected $table = 'kelas';

    public static function createKelas()
    {
        $latestCode = self::orderBy('kode_kelas', 'desc')->value('kode_kelas');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'K' . $formattedCodeNumber;
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'kode_jurusan', 'kode_jurusan');
    }
    public function mahasiswa(){
        return $this->hasMany(Mahasiswa::class, 'kode_kelas');
    }
}