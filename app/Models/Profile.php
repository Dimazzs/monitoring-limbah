<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';

    protected $fillable = ['nip', 'alamat', 'tgl_lahir', 'jenis_kelamin', 'no_hp', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function profilePengguna()
    {
        return $this->hasOne(ProfilePengguna::class);
    }

    public function pemohon()
    {
        return $this->hasOne(Pemohon::class);
    }
}
