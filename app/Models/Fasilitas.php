<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $table = 'fasilitas';
    protected $fillable = [
        'pemohon_id',
        'bangunan',
        'tangki',
        'penumpukan_limbah',
        'jenis_limbah',
        'simbol_bangunan',
        'simbol_kemasan',
        'dinding',
        'sop',
        'bak',
        'ventilasi',
    ];

    // Definisikan relasi dengan model Pemohon
    public function pemohon()
    {
        return $this->belongsTo(Pemohon::class, 'pemohon_id');
    }
}
