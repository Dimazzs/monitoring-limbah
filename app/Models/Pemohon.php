<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    use HasFactory;
    protected $table = 'pemohon';
    protected $fillable = ['name', 'jabatan', 'alamat', 'no_hp', 'kegiatan', 'jenis_limbah', 'jumlah_limbah', 'profile_pengguna_id'];

    protected $guarded = ['id'];
    public function profilePengguna()
    {
        return $this->belongsTo(ProfilePengguna::class);
    }
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
    public function dataKelengkapan()
    {
        return $this->hasOne(DataKelengkapan::class);
    }
    public function fasilitas()
    {
        return $this->hasOne(Fasilitas::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'pemohon_id');
    }
    public function laporan()
    {
        return $this->hasMany(Laporan::class, 'pemohon_id');
    }
}
