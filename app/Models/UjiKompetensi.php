<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UjiKompetensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'nama_lengkap', 'tujuan', 'skema', 'url_bukti_pembayaran'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
