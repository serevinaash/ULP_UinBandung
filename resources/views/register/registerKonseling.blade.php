@extends('register/layouts.main')

@section('container')
    <div class="d-flex justify-content-center">
        <section id="jadwal" data-stellar-background-ratio="2">
            <br>
            <div class="col-md-12 text-center">
                <h3 class="wow fadeInUp" data-wow-delay="1.6s">Pendaftaran Layanan Tes Uji Kompetensi <br> ULP UIN Sunan
                    Gunung Djati Bandung</h3>
                <br>
            </div>
            <div class="col-md-12">
                <div class="container2 mx-auto">
                    <div class="row">
                        <div class="form-wrap">
                            <form id="survey-form" action="/submit-konseling" method="POST">
                                @if (session()->has('failed'))
                                    <div class="alert alert-danger alert-dismissible fade show mb-3" id="alert"
                                        role="alert">
                                        {{ session('failed') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label id="whatsapp-label" for="nomorWa">Nomor WhatsApp Aktif</label>
                                            <input @error('nomorWa') is-invalid @enderror type="text" name="nomorWa"
                                                id="nomorWa" placeholder="Masukkan nomor WhatsApp aktif"
                                                class="form-control" required>
                                            @error('nomorWa')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tujuan Konseling</label>
                                            <textarea @error('tujuanKonseling') is-invalid @enderror id="tujuanKonseling" class="form-control"
                                                name="tujuanKonseling" placeholder="Masukkan tujuan konseling Anda"></textarea>
                                            @error('tujuanKonseling')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>General Problem</label>
                                            <input @error('generalProblem') is-invalid @enderror type="text"
                                                name="generalProblem" id="generalProblem"
                                                placeholder="Masukkan general problem Anda" class="form-control" required>
                                            @error('generalProblem')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Pilih Tanggal Konseling</label>
                                            <input @error('date') is-invalid @enderror type="date" id="tanggal"
                                                name="tanggal" class="form-control" required>
                                            @error('date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Pilih Metode Konseling</label>
                                            <select @error('media') is-invalid @enderror id="media" name="media"
                                                class="form-control" required>
                                                <option disabled selected value>Pilih mode</option>
                                                <option value="online">Online</option>
                                                <option value="offline">Offline</option>
                                            </select>
                                            @error('media')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Pilih Sesi Konseling</label>
                                            <select @error('sesi') is-invalid @enderror id="sesi" name="sesi"
                                                class="form-control" required>
                                                <option disabled selected value>Pilih sesi</option>
                                            </select>
                                            @error('sesi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="col-md-4 mx-auto text-center"> <!-- Added mx-auto class here -->
                                        <center><button type="submit" id="submit"
                                                class="btn btn-primary btn-block">Submit Survey</button></center>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Toast Bootstrap -->
                    <div id="toast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <button type="button" class="close" data-dismiss="toast">&times;</button>
                            <strong class="mr-auto">Peringatan</strong>
                        </div>
                        <div class="toast-body">
                            Pilih tanggal antara Senin hingga Jumat.
                        </div>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

                    <script>
                        document.getElementById('tanggal').addEventListener('change', function() {
                            // Ambil tanggal yang dipilih oleh pengguna
                            var selectedDate = this.value;

                            // Kirim permintaan AJAX ke server untuk mendapatkan sesi-sesi yang tersedia untuk tanggal tersebut
                            axios.get('/get-available-sessions', {
                                    params: {
                                        tanggal: selectedDate
                                    }
                                })
                                .then(function(response) {
                                    // Ambil data sesi yang tersedia dari respons
                                    var availableSessions = response.data;

                                    // Hapus opsi yang ada di dropdown sesi
                                    var selectSesi = document.getElementById('sesi');
                                    selectSesi.innerHTML = '';

                                    // Tambahkan opsi sesi yang tersedia ke dropdown
                                    const values = Object.values(availableSessions);
                                    values.forEach(function(session) {
                                        var option = document.createElement('option');
                                        option.value = session;
                                        option.textContent = session;
                                        selectSesi.appendChild(option);
                                    });
                                })
                                .catch(function(error) {
                                    console.error('Error:', error);
                                });
                        });

                        const inputTanggal = document.getElementById('tanggal');
                        const toast = $('#toast');

                        const tanggalSekarang = new Date();
                        const hariSekarang = tanggalSekarang.getDay();

                        if (hariSekarang === 0) {
                            tanggalSekarang.setDate(tanggalSekarang.getDate() + 1);
                        } else if (hariSekarang === 6) {
                            tanggalSekarang.setDate(tanggalSekarang.getDate() + 2);
                        }

                        function isHariKerja(tanggal) {
                            const hari = tanggal.getDay();
                            return (hari >= 1 && hari <= 5);
                        }

                        inputTanggal.min = tanggalSekarang.toISOString().split('T')[0];

                        inputTanggal.addEventListener('change', function() {
                            const tanggalTerpilih = new Date(this.value);
                            if (!isHariKerja(tanggalTerpilih)) {
                                // Tampilkan toast jika tanggal yang dipilih tidak valid
                                toast.removeClass('hide').addClass('show');
                                setTimeout(function() {
                                    toast.removeClass('show').addClass('hide');
                                }, 3000);
                                this.value = ''; // Hapus tanggal yang tidak valid
                            }
                        });

                        // Tutup toast saat tombol close diklik
                        $('.close').click(function() {
                            toast.removeClass('show').addClass('hide');
                        });
                    </script>
                @endsection
