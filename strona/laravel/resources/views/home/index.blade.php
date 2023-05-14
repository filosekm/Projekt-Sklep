<html  >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/47baed009803ac8f340d9f92abd58e94-121x121.png" type="image/x-icon">
    <meta name="description" content="">


    <title>Projekt Sklep</title>
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
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Kategorie</strong></h4>

        </div>
        <div class="row mt-4">
            <div class="item features-image сol-12 col-md-6 col-lg-6 active">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/giti-sport-s2-90-grad-1-590x590.png">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"></h5>


                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="/opony" class="btn btn-primary item-btn display-7" target="_blank">Opony</a></div>
                </div>
            </div>

            <div class="item features-image сol-12 col-md-6 col-lg-6">
                <div class="item-wrapper">
                    <div class="item-img">
                        <a href="https://giti-tire.eu/content/pl/tires/1-gitisports2/giti_sport_s2_90_grad.png"><img src="assets/images/pdk-500x500.png" alt="" data-slide-to="1" data-bs-slide-to="1"></a>
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"></h5>


                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="/skrzynia-biegow" class="btn btn-primary item-btn display-7" target="_blank">Skrzynia biegów</a></div>
                </div>
            </div><div class="item features-image сol-12 col-md-6 col-lg-6">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/zawieszenie-niezalezne.webp" data-slide-to="2" data-bs-slide-to="2">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"></h5>


                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="/zawieszenie" class="btn btn-primary item-btn display-7" target="_blank">Zawieszenie</a></div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-6">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/db2019au01629-medium-750x750.png" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"></h5>


                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="/silnik" class="btn btn-primary item-btn display-7" target="_blank">Silnik</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
        @if (\Session::has('failure'))
            <div class="text-black alert alert-danger">
                <p>{{ \Session::get('failure') }}</p>
            </div><br />
        @endif
            <div class="text-white">
                <h2>Zapisz się do naszego newslettera</h2><br/>
            </div>
            <form method="post" action="{{ route('subscribe') }}">
            @csrf
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="text-white form-group col-md-2">
            <label for="Email">Email:</label>
            <input type="email" class="form-control" name="subscriber_email">
            @if($errors->has('subscriber_email'))
                <span class="text-danger">{{ $errors->first('subscriber_email') }}</span>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    </form>
    </div>
</section>

<section data-bs-version="5.1" class="footer3 cid-tEaeFWAijL" once="footers" id="footer3-n">


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
