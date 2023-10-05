<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $fillable = [
        'pemohon_id',
        'comment',
    ];
    public function pemohon()
    {
        return $this->belongsTo(Pemohon::class, 'pemohon_id');
    }
}
