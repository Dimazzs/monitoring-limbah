<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKelengkapan extends Model
{
    use HasFactory;
    protected $table = 'data_kelengkapan';

    protected $fillable = [
        'pemohon_id',
        'surat',
        'akta',
        'npwp',
        'ktp',
        'doc_penyimpanan',
        'doc_pengemasan',
        'doc_perizinan',
    ];

    // Definisikan relasi antara DataKelengkapan dan model Pemohon (jika diperlukan)
    public function pemohon()
    {
        return $this->belongsTo(Pemohon::class, 'pemohon_id');
    }
}
