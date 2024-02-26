@extends('layouts.main')

@section('head')

    <head>
        <title>Unit Layanan Psikologi - UIN Bandung</title>
        <meta charset="UTF-8" />
        <meta content="IE=Edge" http-equiv="X-UA-Compatible" />
        <meta content="" name="description" />
        <meta content="" name="keywords" />
        <meta content="Tooplate" name="author" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/font-awesome.min.css" rel="stylesheet" />
        <link href="../css/animate.css" rel="stylesheet" />
        <link href="../css/owl.carousel.css" rel="stylesheet" />
        <link href="../css/owl.theme.default.min.css" rel="stylesheet" />
        <link href="../https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
        <link href="../assets/style.css" rel="stylesheet" />
        <!-- Link to the external CSS file -->

        <script src="../https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <!-- MAIN CSS -->
        <link href="../css/tooplate-style.css" rel="stylesheet" />
    </head>
@endsection


@section('container')
    <!-- KONSELING -->
    <section id="konseling">
        <div class="container2">
            <div class="row">
                <div class="col-md-5 col-sm-2">
                    @if(session()->has('success'))
                    <div class="alert alert-success " style="max-width: 280px" >
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.6s">Uji Kompetensi</h2>
                        <div class="d-flex justify-content-start">
                            <!-- Added div with class "d-flex justify-content-start" -->
                            <img src="../images/uji.svg" alt="thinking" class="img-uji">
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <p class="uji">Tes Uji Kompetensi UIN Sunan Gunung Djati Bandung bekerja sama dengan Lembaga
                        Sertifikasi Profesi Psikologi Indonesia (LSPPSI) akan menyelenggarakan Ujian Kompetensi Sertifikasi
                        BNSP untuk 7 Skema Standar Kompetensi Kerja Khusus Profesi Psikologi.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- JADWAL -->
    <section id="jadwal" data-stellar-background-ratio="2">
        <div class="container mx-auto">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="wow fadeInUp" data-wow-delay="1.6s">Skema yang diajukan</h3>
                </div>
                <button class="read-more-button3">asisten psikologi</button>
                <button class="read-more-button3">asisten psikolog forensik</button>
                <button class="read-more-button3">psikologi sekolah</button><br>
                <button class="read-more-button3">Perancang dan Fasilitator Pengembang Komunitas</button>

                <button class="read-more-button3">Konsultan Psikolog Bidang SDM</button>
                <button class="read-more-button3">Psikolog Industri dan Organisasi</button>
            </div>
        </div>
    </section>

    <!-- KONSELING INFO -->
    <section id="konseling">
        <div class="container2">
            <div class="row">
                <div class="col-md-5 col-sm-2">
                    <div class="about-info">
                        <div class="d-flex justify-content-start">
                            <!-- Added div with class "d-flex justify-content-start" -->
                            <img src="../images/Group70.svg" alt="thinking" class="img-uji">
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <p>Sebelum mendaftar, harap membaca dan memahami persyaratan sertifikasi.
                        Untuk persyaratan dapat diakses melalui: <br>
                        <button class="read-more-button2">Link persyaratan</button>
                </div>
            </div>
        </div>
        <br>
    </section>
    <!-- TIMELINE -->
    <section id="timeline" data-stellar-background-ratio="4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="wow fadeInUp" data-wow-delay="1.6s">Timeline</h3>
                    <br>
                    <div class="align-self-center">
                        <div class="timeline">
                            <div class="containerr left">
                                <div class="contentt">
                                    <h5>Batas Pendaftaran</h5>
                                    <p>23 Desember 2024</p>
                                </div>
                            </div>
                            <div class="containerr right">
                                <div class="contentt">
                                    <h5>Verifikasi Berkas</h5>
                                    <p>27 Desember 2024</p>
                                </div>
                            </div>
                            <div class="containerr left">
                                <div class="contentt">
                                    <h5>Pra Assesmen</h5>
                                    <p>27 Desember 2024</p>
                                </div>
                            </div>
                            <div class="containerr right">
                                <div class="contentt">
                                    <h5>Pelaksanaan Ujian</h5>
                                    <p>27 Desember 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="read-more-button2 ">Verifikasi Berkas</button>
                </div>
            </div>
    </section>

    <!-- KONSELING INFO -->
    <section id="ujikompetensi" data-stellar-background-ratio="2">
        <div class="container mx-auto">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="wow fadeInUp" data-wow-delay="1.6s">Seluruh peserta uji kompetensi diwajibkan membawa
                        berkas-berkas berikut:</h4>
                </div>
                <div class="col-md-12 text-center"> <!-- Add a column for buttons -->
                    <button class="read-more">Fotokopi KTP</button>
                    <button class="read-more">Fotocopy Kartu Anggota HIMPSI (SIK) yang masih berlaku</button>
                    <button class="read-more">Fotokopi Ijazah Pendidikan Sarjana Psikologi</button>
                    <button class="read-more">Pas foto 4x6 sebanyak 2 (dua) lembar</button>
                    <button class="read-more">CV Pengalaman kerja di bidang skema yang dipilih selama minimal 5
                        tahun</button>
                    <button class="read-more">Portofolio pengalaman sesuai skema yang dipilih</button>

                </div>
            </div>
        </div>
        <div class="container7 mx-auto">
            <div class="col-md-4 col-sm-4 text-center">
                <section id="ujikompetensi" data-stellar-background-ratio="2">

                    <br>
                    <div class="team-thumb2 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-info text-center">
                            <h4>Rp. 200.000</h4>
                        </div>
                        <img src="../images/akhir.svg" class="img-responsive2" alt="">
                        <div class="team-info text-center">
                            <a href="/register/uji-kompetensi"><button class="custom-button">Daftar Uji
                                    Kompetensi</button></a>

                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section id="ujikompetensi" data-stellar-background-ratio="2">
        <div class="container mx-auto">
            <div class="row">
                <div class="col-md-4 col-sm-7 text-center">
                    <!-- Team 2 -->
                    <br>
                    <div class="team-thumb2 wow fadeInUp" data-wow-delay="1s">
                        <div class="team-info text-center">
                            <h4>Kelompok</h4>
                        </div>
                        <img src="../images/bsi.svg" class="img-responsive2" alt="">
                        <div class="team-info text-center">
                            <h5>No rekening 7122705921 <br>
                                (BSI) a.n.Rika Rahmawati</h5>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
