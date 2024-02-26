<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psikotes extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'nomor_wa', 'jenis_psikotes', 'tujuan_psikotes', 'tanggal', 'media', 'jumlah_peserta'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
