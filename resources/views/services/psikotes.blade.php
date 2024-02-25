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
    <section id="konseling">
        <div class="container2">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.6s">Psikotes</h2>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <h3 class="wow fadeInUp" data-wow-delay="1.6s">Jenis-Jenis Tes</h3>
                </div>
            </div>
        </div>
        <br />
        <section class="container">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-info text-center">
                            <h3>Tes Kecerdasan</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-info text-center">
                            <h3>Tes Minat Bakat</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-info text-center">
                            <h3>Tes Kesiapan Sekolah</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="container3">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="team-thumb4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-info text-center">
                                <h3>Deteksi Dini Tumbuh Kembang</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="team-thumb4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="team-info text-center">
                                <h3>Seleksi Karyawan</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="team-thumb4 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="team-info text-center">
                                <h3>Tes Kesulitan Belajar</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-stellar-background-ratio="2" id="jadwal">
            <div class="container mx-auto">
                <div class="row">
                    <!-- Additional Team Section -->
                    <div class="col-md-12 text-center">
                        <br />
                        <h3 class="wow fadeInUp" data-wow-delay="1.6s">
                            Jadwal Psikotes
                        </h3>
                        <br />
                    </div>
                    <!-- Team Container -->
                    <div class="row justify-content-center">
                        @foreach ($data as $item)
                            <div class="col-md-3 col-sm-4 text-center">
                                <div class="team-thumb wow fadeInUp" data-wow-delay="0.8s" style="position: relative">
                                    <div class="team-info text-center">
                                        <h5>{{ $item['day'] }}</h5>
                                    </div>
                                    <img src="{{ asset('images/Ellipse2.svg') }}" class="img-responsive" alt="">
                                    <div class="team-info text-center text-percentage">
                                        <h5>{{ $item['percentage'] }}% terisi</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-12 text-center">
                        <br />
                        <p data-wow-delay="1.6s">
                            Psikotes dilaksanakan 1x sehari dari pukul 09.00-15.00.
                        </p>
                    </div>
                </div>
                <section data-stellar-background-ratio="2" id="jadwal">
                    <div class="col-md-12 text-center">
                        <h3 class="wow fadeInUp" data-wow-delay="1.6s">Paket</h3>
                        <div class="container7 mx-auto">
                            <div class="row">
                                <!-- Additional Team Section -->
                            </div>
                            <!-- Team Container -->
                            <div class="row">
                                <!-- Team 1 and Team 2 in a single row -->
                                <div class="col-md-4 col-sm-4 text-center">
                                    <!-- Team 1 -->
                                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="team-info text-center">
                                            <h4>individu</h4>
                                        </div>
                                        <img alt="" class="img-responsive2" src="../images/person-fill.svg" />
                                        <div class="team-info text-center">
                                            <h5>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit.
                                            </h5>
                                            <a href="/register/psikotes"><button class="custom-button">Lihat
                                                    Detail</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <!-- Team 2 -->
                                    <div class="team-thumb wow fadeInUp" data-wow-delay="1s">
                                        <div class="team-info text-center">
                                            <h4>Kelompok</h4>
                                        </div>
                                        <img alt="" class="img-responsive2" src="../images/people.svg" />
                                        <div class="team-info text-center">
                                            <h5>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit.
                                            </h5>
                                            <a href="/register/psikotes-kelompok"><button class="custom-button">Lihat
                                                    Detail</button></a>
                                            ><br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            </div>
        </section>
    </section>
@endsection
