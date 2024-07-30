<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_semester',
        'semester',
        'kode_keterangan'
    ];

    protected $table = 'semesters';

    public static function createSemester()
    {
        $latestCode = self::orderBy('kode_semester', 'desc')->value('kode_semester');
        $latestCodeNumber = intval(substr($latestCode, 3));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'SMT' . $formattedCodeNumber;
    }

    public function keterangan()
    {
        return $this->belongsTo(Keterangan::class, 'kode_keterangan', 'kode_keterangan');
    }
}