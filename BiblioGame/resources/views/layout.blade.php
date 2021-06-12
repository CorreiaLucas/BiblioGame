<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8">
        <link href = "{{asset('lib/bootstrap/bootstrap.min.css')}}" rel ="stylesheet">
        <!-- CSS FOR SIDEBAR -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        
        
        <link href = "{{asset('/css/jquery.mCustomScrollbar.min.css')}}" rel ="stylesheet">
        <link href = "{{asset('/css/animate.css')}}" rel ="stylesheet">
        <link href = "{{asset('/css/style.css')}}" rel ="stylesheet">
        <link href = "{{asset('/css/media-queries.css')}}" rel ="stylesheet">
 
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
 
        <title>
            @yield('titrePage')
        </title>
    </head>

    <body>

        <header>
            @yield('titreItem')
        </header>

        
        <!-- Wrapper -->
        <div class="wrapper">
        
        <!-- Sidebar -->
        <nav class="sidebar">

            <!-- close sidebar menu -->
            <div class="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="logo">
                <h3><a href="index.html">Bootstrap 4 Template with Sidebar Menu</a></h3>
            </div>

            <ul class="list-unstyled menu-elements">
                <li class="active">
                    <a class="scroll-link" href="#top-content"><i class="fas fa-home"></i> Home</a>
                </li>
                @auth
                    <li>
                        <a class="scroll-link">  <i class="fas fa-cog"></i>Bienvenue, {{Auth::user()->name }} </a>
                    </li>
                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                @else
                    <li>
                        <a class="nav-link active" aria-current="page" href="{{route('login') }}"> Login </a>
                    </li>
                    <li>
                        <a class = "nav-link active" aria-current="page" href="{{route('register') }}"> Register </a>
                    </li>
                @endauth
                <li>
                    <a class="scroll-link" href="#section-2"><i class="fas fa-cog"></i> What we do</a>
                </li>
                <li>
                    <a class="scroll-link" href="#section-3"><i class="fas fa-user"></i> About us</a>
                </li>
                <li>
                    <a class="scroll-link" href="#section-4"><i class="fas fa-envelope"></i> Contact us</a>
                </li>
            </ul>

            <div class="to-top">
                <a class="btn btn-primary btn-customized-3" href="#" role="button">
                    <i class="fas fa-arrow-up"></i> Top
                </a>
            </div>

            <div class="dark-light-buttons">
                <a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
                <a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
            </div>

        </nav>
        <!-- End sidebar -->

        <!-- Dark overlay -->
        <div class="overlay"></div>

        <!-- Content -->
        <div class="content">

            <!-- open sidebar menu -->
            <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
                <i class="fas fa-align-left"></i> <span>Menu</span>
            </a>

           @yield('contenu')

        </div>
        <!-- End content -->

        </div>
        <!-- End wrapper -->   
      
        
        
    
        <footer class ="footer">
            <section class="row">
                    <div class="col-sm-4">
                        <p><strong>Nos coordonnées :</strong></p>
                        <strong>BiblioGame </strong> <br/>
                        15 Boulevard André Latarjet<br/>
                        69100 Villeurbanne  <br/>
                        <p><strong>06 00 00 00 00</strong></p>
                    </div>
                    <div class="col-sm-4">
                        <p><strong>Nos réseaux sociaux :</strong></p>
                        TWITTER<br/>
                        FACEBOOK
                        <br/>
                    </div>
                    <div class="col-sm-4">
                        <p><strong>Pour nous trouver :</strong></p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.649003307103!2d2.355835951228717!3d48.86490317918651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e0540a35a13%3A0xfb3ff09793509353!2s15%20Rue%20R%C3%A9aumur%2C%2075003%20Paris!5e0!3m2!1sfr!2sfr!4v1609918545725!5m2!1sfr!2sfr"></iframe>                </div>
            </section>   
        </footer>
        <!-- Javascript -->
        <script type='text/javascript'>
        jQuery(document).ready(function() {
        
        $('.dismiss, .overlay').on('click', function() {
            $('.sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('.open-menu').on('click', function(e) {
            e.preventDefault();
            $('.sidebar').addClass('active');
            $('.overlay').addClass('active');
            // close opened sub-menus
            $('.collapse.show').toggleClass('show');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });

        /* other code */

        });</script>

        <script type='text/javascript' src="{{asset('/lib/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('/lib/jquery/jquery-3.6.2.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="{{asset('/js/jquery.backstretch.min.js')}}"></script>
        <script src="{{asset('/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('/js/scripts.js')}}"></script>

    </body>
</html>
