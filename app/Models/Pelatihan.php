<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;
    protected $table = 'pelatihan';
    protected $fillable = [
        'user_id',
        'universitas_mahasiswa',
        'prodi_mahasiswa',
        'nohp_mahasiswa',
        'email_mahasiswa',
        'berkas_mahasiswa',
        'sertifikat_mahasiswa',
        'status',
        'profile_photo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
