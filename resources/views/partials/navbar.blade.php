<section class="navbar navbar-default navbar-static-top navbar-fixed-top navbar-light" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
        </div>
        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse" id="Home">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/profile/umum">Profile</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Service <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/services/konseling">Konseling</a>
                        </li>
                        <li>
                            <a href="/services/psikotes">Psikotes</a>
                        </li>
                        <li>
                            <a href="/services/uji-kompetensi">Uji Kompetensi</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#Contact">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @auth
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">
                            {{ Auth::user()->nama_lengkap }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="/logout"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="appointment-btn">
                        <a href="/login">Login</a>
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</section>
