<?php

namespace App\Http\Controllers;

use App\Models\UjiKompetensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UjiKompetensiController extends Controller
{
    public function index() {
        return view('services.ujiKompetensi');
    }

    public function daftar() {
        return view('register.registerUjiKompetensi');
    }

    public function create(Request $request) {
        $user_id = Auth::id();
    
        // Validasi data input
        $request->validate([
            'namaLengkap' => 'required|string',
            'tujuan' => 'required|string',
            'skema' => 'required|string',
            'buktiPembayaran' => 'required|image',
        ]);
    
        if ($request->hasFile('buktiPembayaran')) {
            // Simpan file bukti pembayaran dan dapatkan URL-nya
            $urlBuktiPembayaran = $request->file('buktiPembayaran')->store('public/bukti-pembayaran');
            // Ubah path agar sesuai dengan link yang dapat diakses secara publik
            $urlBuktiPembayaran = str_replace('public/', 'storage/', $urlBuktiPembayaran);
        } else {
            $urlBuktiPembayaran = null;
        }
    
        // Buat uji kompetensi baru
        $ujiKompetensi = new UjiKompetensi();
        $ujiKompetensi->user_id = $user_id;
        $ujiKompetensi->nama_lengkap = $request->namaLengkap;
        $ujiKompetensi->tujuan = $request->tujuan;
        $ujiKompetensi->skema = $request->skema;
        $ujiKompetensi->url_bukti_pembayaran = $urlBuktiPembayaran;
    
        $ujiKompetensi->save();
        // dd($ujiKompetensi);
    
        // Jika uji kompetensi berhasil dibuat, kembalikan respons
        return redirect('/services/uji-kompetensi')->with('success', 'Anda berhasil membuat janji temu.');
    }
    
}
