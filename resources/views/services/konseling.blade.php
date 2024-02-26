@extends('layouts.main')

@section('head')

    <head>
        <title>Unit Layanan Psikologi - UIN Bandung</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Tooplate">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/owl.carousel.css">
        <link rel="stylesheet" href="../css/owl.theme.default.min.css">
        <link rel="stylesheet" href="../https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
        <link rel="stylesheet" href="../assets/style.css"> <!-- Link to the external CSS file -->
        <script src="../https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="../css/tooplate-style.css">


    </head>
@endsection

@section('container')
    <section id="konseling">
        <div class="container2">
            <div class="row">

                <div class="col-md-5 col-sm-4">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.6s">Konseling</h2>
                        <img src="../images/konseling.png" alt="thinking" class="img-konseling">
                        <h3 class="wow fadeInUp" data-wow-delay="0.6s">kenali tanda-tanda seseorang membutuhkan konseling!
                        </h3>


                    </div>
                </div>
                <br><br><br>
                <div class="col-md-6 col-sm-5">
                    <h5 class="upaya">Upaya bantuan yang diberikan kepada individu maupun kelompok/keluarga yang sedang
                        mengalami suatu permasalahan tertentu. Konseling ini bertujuan untuk mengubah perilaku yang salah,
                        belajar membuat keputusan, dan mencegah timbulnya masalah.
                        Konseling ini dapat dilakukan secara offline maupun online. Salah satu jenis konseling online yang
                        dilakukan oleh Unit Layanan Psikologi UIN Sunan Gunung Djati Bandung ini adalah memberikan
                        konsultasi gratis bagi masyarakat yang memiliki perasaan cemas,
                        Khawatir ataupun masalah psikologis lainnya terkait Covid-19 dan membutuhkan bantuan profesional.
                    </h5>
                </div>
                <img src="../images/tanya.svg" alt="thinking" class="img-tanya">
            </div>


        </div>
        </div>
        <br>
        <div class="container">
            <div class="clearfix"></div>
            <div class="col-md-4 col-sm-6">
                <div class="team-thumb3 wow fadeInUp" data-wow-delay="0.2s">

                    <div class="team-info text-center">
                        <h3>Perubahan Perilaku yang Signifikan</h3>
                        <p>Jika seseorang mengalami perubahan drastis dalam perilaku mereka seperti penurunan minat, isolasi
                            diri,
                            perubahan pola tidur atau makan, kemarahan yang tidak terkendali,atau penurunan performa
                            akademis atau pekerjaan.</p>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="team-thumb3 wow fadeInUp" data-wow-delay="0.4s">

                    <div class="team-info text-center">
                        <h3>Masalah Emosional</h3>
                        <p class="team-info2">Jika seseorang mengalami masalah emosional seperti kecemasan yang berlebihan,
                            depresi, atau stres yang konstan dan berkepanjangan.</p>

                    </div>

                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="team-thumb3 wow fadeInUp" data-wow-delay="0.6s">

                    <div class="team-info text-center">
                        <h3>Kesulitan dalam Hubungan Interpersonal</h3>
                        <p>Jika seseorang mengalami kesulitan dalam menjalani hubungan interpersonal, baik itu dalam
                            hubungan keluarga, persahabatan, atau percintaan, dan kesulitan tersebut terus berlanjut tanpa
                            perbaikan.</p>

                    </div>
                </div>
            </div>
    </section>

    <div class="d-flex justify-content-center">
        <section id="jadwal" data-stellar-background-ratio="2">
            <div class="col-md-12 text-center">
                <h2 class="wow fadeInUp" data-wow-delay="1.6s">Jadwal</h2>
            </div>
            <div class="container6 mx-auto">
                <div class="row">
                    <div class="row">
                        <div class="row justify-content-center">
                            @foreach ($data as $item)
                                <div class="col-md-2 col-sm-4 text-center">
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
                    </div>

                </div>
        </section>
        <section id="konseling">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br><br>
                        <p data-wow-delay="1.6s">Konseling tersedia pada hari kerja mulai pukul 08:00 - 16:00 <br>
                            *jadwal akan diperbaharui setiap minggu nya</p>
                    </div>
                    <div class="col-md-12 text-center">
                        <h3 class="wow fadeInUp" data-wow-delay="1.6s">Konsultasikan <br> Masalah Anda <br> Sekarang</h3>
                        <a href="/register/konseling"><button class="read-more-button2">Daftar Konseling</button></a>
                    </div>
                </div>
            </div>
    </div>
    </section>
@endsection
