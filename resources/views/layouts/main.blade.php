@php
    use App\Models\Categorie;
@endphp
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--=============== FAVICON ===============-->
        <!-- SEO -->
        <meta name="keywords" content="Hkat-Musique Accueil, Votre boîte à musique Katangaise, renovez votre plaisir musicale en retrouvant la bonne selon vos préférences">
        <meta name="description" content="Hkat Musique, vous propose la musique, Hkat-Musique, Elvin Kyungu Co-fondateur de Hkat-Musique et CEO à monopole Global, Jocelin Kisenga CTO à monopole global et Co-fondateur de Hkat-Musique">
        <meta name="author" content="Elvin Kyungu, Jocelin Kisenga, Hkat-Musique votre boîte à musique Katangaise">
        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content="Hkat-Musique"/>
        <meta property="og:url" content="https://www.Hkat-Musique.com"/>
        <meta property="og:site_name" content="Hkat-Musique"/>
        <meta property="og:description" content="A propos de Hkat-Musique : Hkat-Musique c'est une plateforme qui vous propose de la bonne musique katangaise, gospel et International selon vos préférences"/>
        <meta name="facebook:title" content="Hkat-Musique" />
        <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/base.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/icomoon/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/songsJscss/song.css')}}">
        <title>Accueil | Hkat-Musique</title>
    </head>
    <body>
        <div class="preloader-wrap">
            <div class="preloader">
                <div class="loading-circle loading-circle-one"></div>
                <div class="loading-circle loading-circle-two"></div>
                <div class="loading-circle loading-circle-three"></div>
            </div>
        </div>
        <div id="app">
            <!--=============== HEADER ===============-->
            <header class="header" id="header">
                <nav class="nav container">
                    <h2 class="titre-nav" title="Hkat-Musique">Hkat-Musique<img src="{{asset('assets/img/favicon.ico')}}" alt="Hkat-Musique-logo" style="width: 30px; position: absolute; margin-left: 15px;"></h2>
                    <div class="nav__menu" id="nav-menu">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="{{route('home')}}" class="nav__link active-link">Accueil</a>
                            </li>
                            @foreach (Categorie::all() as $categorie)
                                
                            <li class="nav__item">
                                <a href="{{route('categorie-detail',['slug'=>$categorie->name,'id'=>$categorie->id])}}" class="nav__link">{{$categorie->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="nav__close" id="nav-close">
                            <i class=" icon icon-view_headline" id="navbarTogle"></i>
                        </div>
                    </div>
                    <div class="icons_user-search">
                        <i class="icon-user icons-header" id="login-btn"></i></a>
                        <i class="icon-search icons-header" id="search-btn"></i></a>
                    </div>
                    <form action="" class="search-bar-container">
                        <input type="search" id="search-bar" placeholder="search here...">
                        <label for="search-bar" class="fas fa-search "></label>
                    </form>
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="icon icon-view_headline"></i>
                    </div>
                </nav>
            </header>
            <div class="login-form-container">
                <i class="fas fa-times icon-times" id="form-close"></i>
            @guest
            <form id="form">
                <h3>login</h3>
                <input type="text" class="box" placeholder="Entrer votre adresse mail" id="email">
                <small class="small small1"></small>
                <input type="password" class="box" placeholder="Entrer votre password" id="password">
                <small class="small small2"></small>
                <input type="submit" value="Se connecter" class="btn">
                <input type="checkbox" id="remember">
                <label for="remember">se souvenir de moi</label>
                <p>Vous n'avez pas un compte ? <a href="inscription.html">inscrivez-vous maintenant</a></p>
            </form>
            @endguest
            @auth
            <form id="form" method="post" action="{{route('logout')}}">
                @csrf
             <button type="s
             ">inscrivez-vous maintenant</button>
            </form>
            @endauth
            </div>
            <div class="toggle-search">
            </div>

            @yield('content')


                        <!--=============== FOOTER ===============-->
                        <footer class="footer section">
                            <div class="footer__container container grid">
                                <a href="#" class="footer__logo">
                                    <img src="{{asset('assets/img/favicon.ico')}}" alt="">
                                </a>
                    
                                <div class="footer__content">
                                    <h3 class="footer__title">Nos liens</h3>
                    
                                    <ul class="footer__links">
                                        <li>
                                            <a href="katanga.html" class="footer__link">Katanga</a>
                                        </li>
                                        <li>
                                            <a href="gospel.html" class="footer__link">Gospel</a>
                                        </li>
                                        <li>
                                            <a href="international.html" class="footer__link">International</a>
                                        </li>
                                        <li>
                                            <a href="contact.html" class="footer__link">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                    
                                <div class="footer__content">
                                    <h3 class="footer__title">Support</h3>
                    
                                    <ul class="footer__links">
                                        <li>
                                            <a href="#" class="footer__link">Monopole Global</a>
                                        </li>
                                        <li>
                                            <a href="#" class="footer__link">Open Computer Science</a>
                                        </li>
                                        <li>
                                            <a href="#" class="footer__link">Lushidev</a>
                                        </li>
                                        <li>
                                            <a href="#" class="footer__link">Le journaliste</a>
                                        </li>
                                    </ul>
                                </div>
                    
                                <div class="footer__content">
                                    Réalisez votre vie pleinement de potentiel avec la meilleure plateforme qui vous offres de meilleurs services. 
                                    Vous servir c'est notre passion et votre satisfaction c'est notre plaisir ! <br><br>
                    
                                    <div class="footer__social">
                                        <a href="" target="_blank" class="footer__social-link">
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="" target="_blank" class="footer__social-link">
                                            <i class="icon icon-linkedin"></i>
                                        </a>
                                        <a href="" target="_blank" class="footer__social-link">
                                            <i class="icon-whatsapp"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
            
                            <p class="footer__copy">
                                <a href="" target="_blank" class="footer__copy-link">&#169; Hkat-Musique. Produit de <a href="www.monopoleglobal.com">Monopole Global</a> Tous droits réservés</a>
                            </p>
                        </footer>
            
                        <!--=============== SCROLL UP ===============-->
                        <a href="#" class="scrollup" id="scroll-up">
                            <i class="icon icon-angle-double-up scrollup__icon"></i>
                        </a>
                    </div>
                    <!--=============== MAIN JS ===============-->
                    <script src="{{asset('assets/js/preloader.js')}}"></script>
                    <script src="{{asset('assets/js/main.js')}}"></script>
                    <script src="{{asset('assets/js/authentification.js')}}"></script>
                    <script src="{{asset('assets/songsJscss/song.js')}}"></script>
                </body>
            </html>