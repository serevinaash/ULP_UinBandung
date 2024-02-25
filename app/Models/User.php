<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'nama_lengkap',
        'tempat_tanggal_lahir',
        'agama',
        'jenis_kelamin',
        'no_wa',
        'alamat',
        'status',
        'nim',
        'jurusan',
        'fakultas',
        'tahun_masuk',
        'nik',
        'pekerjaan',
        'asal_instansi',
        'status_pernikahan',
        'password',
        'google_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function konselings()
    {
        return $this->hasMany(Konseling::class);
    }

    public function psikotes()
    {
        return $this->hasMany(Psikotes::class);
    }
}
