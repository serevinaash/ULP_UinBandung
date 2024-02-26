<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konseling extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'tanggal', 'sesi', 'status', 'media', 'nomor_wa', 'tujuan_konseling', 'general_problems'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
