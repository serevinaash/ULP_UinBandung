@extends('register.layouts.main')

@section('container')
    <div class="d-flex justify-content-center">
        <section id="jadwal" data-stellar-background-ratio="2">
            <br>
            <div class="col-md-12 text-center">
                <h3 class="wow fadeInUp" data-wow-delay="1.6s">Pendaftaran Layanan Tes Uji Kompetensi <br>ULP UIN Sunan Gunung
                    Djati Bandung</h3>
                <br>
            </div>
            <div class="col-md-12">
                <div class="container2 mx-auto">
                    <div class="row">
                        <div class="form-wrap">
                            <form id="survey-form" action="/submit-ujikom" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label id="name-label" for="namaLengkap">Nama lengkap beserta gelar</label>
                                            <input type="text" name="namaLengkap" id="namaLengkap"
                                                placeholder="Masukkan nama lengkap beserta gelar" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tujuan Psikotes</label>
                                            <textarea id="tujuan" class="form-control" name="tujuan" placeholder="Masukkan tujuan Psikotes Anda"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Skema pilihan</label>
                                            <select id="skema" name="skema" class="form-control" required>
                                                <option disabled selected value>Pilih skema</option>
                                                <option value="asisten-psikologi">Asisten Psikologi</option>
                                                <option value="psikolog-forensik">Psikolog Forensik</option>
                                                <option value="psikologi-sekolah">Psikologi Sekolah</option>
                                                <option value="perancang-dan-fasilitator">Perancang dan Fasilitator
                                                    Pengembang Komunitas</option>
                                                <option value="konsultan-psikolog-sdm">Konsultan Psikolog Bidang SDM
                                                </option>
                                                <option value="psikolog-industri">Psikolog Industri</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Bukti Pembayaran</label>
                                            <input type="file" name="buktiPembayaran" id="buktiPembayaran"
                                                class="form-control" required>
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
                @endsection
