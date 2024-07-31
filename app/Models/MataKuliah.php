<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_mata_kuliah',
        'mata_kuliah',
        'sks',
        'kode_semester',
        'ebook'
    ];

    protected $table = 'mata_kuliahs';

    public static function createMatkul()
    {
        $latestCode = self::orderBy('kode_mata_kuliah', 'desc')->value('kode_mata_kuliah');
        $latestCodeNumber = intval(substr($latestCode, 3));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'MTK' . $formattedCodeNumber;
    }
    public function semester()
    {
        return $this->belongsTo(Semester::class, 'kode_semester', 'kode_semester');
    }
}