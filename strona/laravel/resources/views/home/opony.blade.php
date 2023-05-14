<!DOCTYPE html>
<html  >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/47baed009803ac8f340d9f92abd58e94-121x121.png" type="image/x-icon">
    <meta name="description" content="">


    <title>Opony</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">




</head>
<body>

<section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-k">

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="/">
                        <img src="assets/images/47baed009803ac8f340d9f92abd58e94-121x121.png"  style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-7">Projekt Sklep</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4"></a></li></ul>
                @auth
                    {{auth()->user()->name}}
                    <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="{{ route('logout.perform') }}">Logout</a></div>
                @endauth
                @guest
                    <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="{{ route('login.perform') }}">Login</a></div>
                    <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="{{ route('register.perform') }}">Register</a></div>
                @endguest
            </div>
        </div>
    </nav>

</section>

<section data-bs-version="5.1" class="gallery2 cid-tEaf5u0Mmy" id="gallery2-o">

    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Dostępne części z kategori Opony:</strong></h4>
            <br></br>
            @if ($opony->count() > 0)
                <table class="table table-bordered mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    <tr>
                        <th>Nazwa</th>
                        <th>Producent</th>
                        <th>Numer seryjny</th>
                        <th>Ilość</th>
                    </tr>
                    @foreach ($opony as $czesc)
                        <tr>
                            <td>{{ $czesc->nazwa }}</td>
                            <td>{{ $czesc->producent }}</td>
                            <td>{{ $czesc->numer_seryjny }}</td>
                            <td>{{ $czesc->ilosc }}</td>
                        </tr>
                    @endforeach
                </table>
                @endif
                </table>



</section>

<section data-bs-version="5.1" class="footer3 cid-tEaeFWAijL" once="footers" id="footer3-n">





    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">





                    <li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7"></li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    <div class="soc-item">
                        <a href="" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright&nbsp;</p>
            </div>
        </div>
    </div>



</body>
</html>
