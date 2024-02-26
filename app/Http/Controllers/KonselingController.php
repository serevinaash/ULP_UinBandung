<?php

namespace App\Http\Controllers;

use App\Models\Konseling;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonselingController extends Controller
{
    public function index() {
        // Menghitung tanggal pertama dan terakhir dari minggu ini
        $now = now();
        $firstDayOfWeek = $now->startOfWeek()->toDateString();
        $lastDayOfWeek = $now->endOfWeek()->toDateString();
    
        // Menghitung total konseling
        $totalKonseling = Konseling::count();
    
        // Mendapatkan hari-hari dalam seminggu
        $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];
    
        // Menyiapkan data untuk setiap hari dalam seminggu
        $data = [];
        foreach ($days as $index => $day) {
            // Menghitung jumlah konseling untuk hari ini
            $konselingCount = Konseling::whereRaw('DAYOFWEEK(tanggal) = ?', [$index + 2])
                                                    ->whereBetween('tanggal', [$firstDayOfWeek, $lastDayOfWeek])
                                                    ->count();

            if (in_array($now->dayOfWeek, [Carbon::SATURDAY, Carbon::SUNDAY]) && $konselingCount === 0) {
                // Menghitung tanggal pertama dan terakhir dari minggu depan
                $firstDayOfWeek = $now->addDays(1)->startOfWeek()->toDateString();
                $lastDayOfWeek = $now->endOfWeek()->toDateString();
    
                // Menghitung jumlah konseling untuk hari ini di minggu depan
                $konselingCount = Konseling::whereRaw('DAYOFWEEK(tanggal) = ?', [$index + 2])
                                                        ->whereBetween('tanggal', [$firstDayOfWeek, $lastDayOfWeek])
                                                        ->count();
            }
    
            // Menghitung persentase konseling untuk hari ini
            $percentage = $totalKonseling > 0 ? number_format(($konselingCount / 6) * 100) : 0;
    
            // Menambahkan data ke dalam array
            $data[] = [
                'day' => $day,
                'percentage' => $percentage,
            ];
        }
    
        return view('services.konseling', [
            'data' => $data,
        ]);
    }
    

    public function getAvailableSessions(Request $request)
    {
        $selectedDate = $request->input('tanggal');

        // List sesi yang tersedia
        $allSessions = [
            '09.00-10.00',
            '10.00-11.00',
            '13.00-14.00',
            '14.00-15.00',
            '15.00-16.00',
        ];

        // Ambil sesi-sesi yang telah dibooking untuk tanggal yang dipilih
        $bookedSessions = Konseling::where('tanggal', $selectedDate)
                                    ->where('status', 'booked')
                                    ->pluck('sesi')
                                    ->toArray();

        // Filter sesi yang tersedia
        $availableSessions = array_diff($allSessions, $bookedSessions);

        return response()->json($availableSessions);
    }

    public function daftar() {
        return view('register.registerKonseling');
    }
    
    public function create(Request $request)
    {
        $user_id = Auth::id();

        // Validasi data input
        $request->validate([
            'nomorWa' => 'required|string',
            'tujuanKonseling' => 'required|string',
            'generalProblem' => 'required|string',
            'tanggal' => 'required|date',
            'sesi' => 'required|string',
            'media' => 'required|string',
        ]);

        // Buat konseling baru
        $konseling = new Konseling();
        $konseling->user_id = $user_id;
        $konseling->nomor_wa = $request->nomorWa;
        $konseling->tujuan_konseling = $request->tujuanKonseling;
        $konseling->general_problems = $request->generalProblem;
        $konseling->tanggal = $request->tanggal;
        $konseling->sesi = $request->sesi;
        $konseling->media = $request->media;
        $konseling->status = 'booked';

        $konseling->save();
        // dd($konseling);

        // Jika konseling berhasil dibuat, kembalikan respons
        return redirect('/services/konseling')->with('success', 'Anda berhasil membuat janji temu.');
    }
}
