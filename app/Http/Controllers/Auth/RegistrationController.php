<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index() {
        return view('register.register');
    }

    public function register(Request $request) {
        // Validasi data dari request
         $request->validate([
            'email' => 'required|email|unique:users,email',
            'namaLengkap' => 'required|string',
            'tempatTanggalLahir' => 'required|string',
            'agama' => 'required|string',
            'jenisKelamin' => 'required|string',
            'noWa' => 'required|string',
            'alamat' => 'required|string',
            'status' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        // Membuat instance User baru
        $user = new User();
        $user->email = $request->email;
        $user->nama_lengkap = $request->namaLengkap;
        $user->tempat_tanggal_lahir = $request->tempatTanggalLahir;
        $user->agama = $request->agama;
        $user->jenis_kelamin = $request->jenisKelamin;
        $user->no_wa = $request->noWa;
        $user->alamat = $request->alamat;
        $user->status = $request->status;

        // Menambahkan data khusus jika status adalah mahasiswa
        if ($request->status === 'Mahasiswa') {
            $request->validate([
                'nim' => 'required|string',
                'jurusan' => 'required|string',
                'fakultas' => 'required|string',
                'tahunMasuk' => 'required|string',
            ]);

            $user->nim = $request->nim;
            $user->jurusan = $request->jurusan;
            $user->fakultas = $request->fakultas;
            $user->tahun_masuk = $request->tahunMasuk;
        }

        // Menambahkan data khusus jika status adalah umum
        if ($request->status === 'Umum') {
            $request->validate([
                'nik' => 'required|string',
                'pekerjaan' => 'required|string',
                'asalInstansi' => 'required|string',
                'statusPernikahan' => 'required|string',
            ]);

            $user->nik = $request->nik;
            $user->pekerjaan = $request->pekerjaan;
            $user->asal_instansi = $request->asalInstansi;
            $user->status_pernikahan = $request->statusPernikahan;
        }

        // Hashing password sebelum disimpan ke database
        $user->password = Hash::make($request->password);
        
        // Simpan user ke database
        $user->save();

        // Response dengan berhasil
        return redirect('/login')->with('success', 'Daftar akun berhasil. Silahkan login!');
    }
}
