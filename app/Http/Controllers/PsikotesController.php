<?php

namespace App\Http\Controllers;

use App\Models\Psikotes;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PsikotesController extends Controller
{

    public function index() {
        // Menghitung tanggal pertama dan terakhir dari minggu ini
        $now = now();
        $firstDayOfWeek = $now->startOfWeek()->toDateString();
        $lastDayOfWeek = $now->endOfWeek()->toDateString();
    
        // Menghitung total psikotes
        $totalPsikotes = Psikotes::count();
    
        // Mendapatkan hari-hari dalam seminggu
        $days = ['Senin', 'Selasa', 'Rabu', 'Kamis'];
    
        // Menyiapkan data untuk setiap hari dalam seminggu
        $data = [];
        foreach ($days as $index => $day) {
            // Menghitung jumlah psikotes untuk hari ini
            $psikotesCount = Psikotes::whereRaw('DAYOFWEEK(tanggal) = ?', [$index + 2])
                                                    ->whereBetween('tanggal', [$firstDayOfWeek, $lastDayOfWeek])
                                                    ->sum('jumlah_peserta');

            // $psikotesCount seharusnya jumlah peserta psikotes untuk hari ini

            if (in_array($now->dayOfWeek, [Carbon::SATURDAY, Carbon::SUNDAY]) && $psikotesCount === 0) {
                // Menghitung tanggal pertama dan terakhir dari minggu depan
                $firstDayOfWeek = $now->addDays(1)->startOfWeek()->toDateString();
                $lastDayOfWeek = $now->endOfWeek()->toDateString();
    
                // Menghitung jumlah psikotes untuk hari ini di minggu depan
                $psikotesCount = Psikotes::whereRaw('DAYOFWEEK(tanggal) = ?', [$index + 2])
                                                        ->whereBetween('tanggal', [$firstDayOfWeek, $lastDayOfWeek])
                                                        ->count();
            }
    
            // Menghitung persentase psikotes untuk hari ini
            $percentage = $totalPsikotes > 0 ? number_format(($psikotesCount / 20) * 100) : 0;
    
            // Menambahkan data ke dalam array
            $data[] = [
                'day' => $day,
                'percentage' => $percentage,
            ];
        }
    
        return view('services.psikotes', [
            'data' => $data,
        ]);
    }

    public function getAvailableSessions(Request $request)
    {
        $selectedDate = $request->input('tanggal');

        // Filter sesi yang tersedia
        $psikotesCount = Psikotes::where('tanggal', $selectedDate)->sum('jumlah_peserta');

        return response()->json($psikotesCount);
    }

    public function daftar() {
        return view('register.registerPsikotes');
    }

    public function daftarKelompok() {
        return view('register.registerPsikotesKelompok');
    }

    public function create(Request $request)
    {
        $user_id = Auth::id();

        // Validasi data input
        $request->validate([
            'nomorWa' => 'required|string',
            'jenisPsikotes' => 'required|string',
            'tujuanPsikotes' => 'required|string',
            'tanggal' => 'required|date',
            'media' => 'required|string',
        ]);

        // Buat psikotes baru
        $psikotes = new Psikotes();
        $psikotes->user_id = $user_id;
        $psikotes->nomor_wa = $request->nomorWa;
        $psikotes->jenis_psikotes = $request->jenisPsikotes;
        $psikotes->tujuan_psikotes = $request->tujuanPsikotes;
        $psikotes->tanggal = $request->tanggal;
        $psikotes->media = $request->media;
        $psikotes->jumlah_peserta = 1;

        $psikotes->save();
        // dd($request);

        // Jika psikotes berhasil dibuat, kembalikan respons
        return redirect('/services/psikotes')->with('success', 'Anda berhasil membuat janji temu.');
    }

    public function createKelompok(Request $request)
    {
        $user_id = Auth::id();

        // Validasi data input
        $request->validate([
            'nomorWa' => 'required|string',
            'jenisPsikotes' => 'required|string',
            'tujuanPsikotes' => 'required|string',
            'tanggal' => 'required|date',
            'media' => 'required|string',
            'jumlahPeserta' => 'required|integer'
        ]);

        // Buat psikotes baru
        $psikotes = new Psikotes();
        $psikotes->user_id = $user_id;
        $psikotes->nomor_wa = $request->nomorWa;
        $psikotes->jenis_psikotes = $request->jenisPsikotes;
        $psikotes->tujuan_psikotes = $request->tujuanPsikotes;
        $psikotes->tanggal = $request->tanggal;
        $psikotes->media = $request->media;
        $psikotes->jumlah_peserta = $request->jumlahPeserta;

        $psikotes->save();
        // dd($request);

        // Jika psikotes berhasil dibuat, kembalikan respons
        return redirect('/services/psikotes')->with('success', 'Anda berhasil membuat janji temu.');
    }
}
