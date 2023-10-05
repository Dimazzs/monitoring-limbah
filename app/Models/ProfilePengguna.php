<?php

namespace App\Models;

use App\Models\Pemohon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfilePengguna extends Model
{
    use HasFactory;
    protected $table = 'profile_pengguna';

    protected $fillable = ['nama_perusahaan', 'email', 'npwp', 'alamat_perusahaan', 'no_tlpn', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function pemohon()
    {
        return $this->hasOne(Pemohon::class);
    }
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
