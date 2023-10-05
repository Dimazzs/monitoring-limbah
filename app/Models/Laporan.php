<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';

    protected $fillable = ['pemohon_id', 'nama_pengawas', 'keterangan'];

    public function pemohon()
    {
        return $this->belongsTo(Pemohon::class, 'pemohon_id');
    }
}
