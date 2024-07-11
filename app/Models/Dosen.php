<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
      'kode_dosen',
      'dosen',
      'email',
      'no_hp'
    ];

protected $table = 'dosens';

    public static function createDosen()
    {
        $latestCode = self::orderBy('kode_dosen', 'desc')->value('kode_dosen');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'DSN' . $formattedCodeNumber;
    }
}