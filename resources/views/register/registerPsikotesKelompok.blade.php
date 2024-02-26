@extends('register.layouts.main')

@section('container')
    <div class="d-flex justify-content-center">
        <section id="jadwal" data-stellar-background-ratio="2">
            <br>
            <div class="col-md-12 text-center">
                <h3 class="wow fadeInUp" data-wow-delay="1.6s">Pendaftaran Layanan Tes Psikotes<br>ULP UIN Sunan Gunung Djati
                    Bandung</h3>
                <br>
            </div>
            <div class="col-md-12">
                <div class="container2 mx-auto">
                    <div class="row">
                        <div class="form-wrap">
                            <form id="survey-form" action="/submit-psikotes-kelompok" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label id="no-wa-label" for="nomorWa">No Wa Aktif</label>
                                            <input type="text" name="nomorWa" id="nomorWa"
                                                placeholder="Masukkan No Wa Aktif" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Jenis Psikotes</label>
                                            <select id="jenis-psikotes" name="jenisPsikotes" class="form-control" required>
                                                <option disabled selected>Pilih jenis psikotes</option>
                                                <option value="Tes Kecerdasan">Tes Kecerdasan</option>
                                                <option value="Tes Minat Bakar">Tes Minat Bakat</option>
                                                <option value="Tes Kesiapan Sekolah">Tes Kesiapan Sekolah</option>
                                                <option value="Deteksi Dini Tumbuh Kembang">Deteksi Dini Tumbuh Kembang
                                                </option>
                                                <option value="Seleksi Karyawan">Seleksi Karyawan</option>
                                                <option value="Tes Kesulitan Belajar">Tes Kesulitan Belajar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tujuan Psikotes</label>
                                            <textarea id="tujuanPsikotes" class="form-control" name="tujuanPsikotes" placeholder="Masukkan tujuan Psikotes Anda"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Pilih Tanggal Konseling</label>
                                            <input type="date" id="tanggal" name="tanggal" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Online / Offline</label>
                                            <select id="media" name="media" class="form-control" required>
                                                <option disabled selected value>Pilih opsi</option>
                                                {{-- <option value="online">Online</option>
                                                <option value="offline">Offline</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Jumlah Peserta</label>
                                            <input min="10" type="number" id="jumlahPeserta" class="form-control" name="jumlahPeserta" placeholder="Masukkan jumlah peserta"></input>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="submit" id="submit" class="btn btn-primary btn-block">Submit
                                            Survey</button>
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
                            Pilih tanggal antara Senin hingga Kamis.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        document.getElementById('jenis-psikotes').addEventListener('change', function() {
            // Ambil jenis psikotes yang dipilih oleh pengguna
            var jenisPsikotes = this.value;
            var media = ['Online', 'Offline'];

            var mediaSelect = document.getElementById('media');
            mediaSelect.innerHTML = '';

            const values = Object.values(media);

            // Reset opsi yang dipilih sebelumnya
            if (jenisPsikotes === "Tes Kecerdasan" || jenisPsikotes === "Seleksi Karyawan") {
                var option = document.createElement('option');
                option.value = 'Offline';
                option.textContent = 'Offline';
                mediaSelect.appendChild(option);
            } else {
                values.forEach(value => {
                    var option = document.createElement('option');
                    option.value = value;
                    option.textContent = value;
                    mediaSelect.appendChild(option);
                });
            }

            console.log(values);
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
            return (hari >= 1 && hari <= 4);
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
