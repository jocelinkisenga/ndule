@extends('layouts.main')
@section('content')
    

<main class="main">
    <!--=============== HOME ===============-->
    <section class="home section" id="home">
        <div class="home__container container grid">
            <div>
                <img src="{{asset('assets/img/home.png')}}" alt="" class="home__img">
            </div>
            
            <div class="home__data">
                <div class="home__header">
                    <h1 class="home__title" title="Hkat-Musique">Hkat-</h1><br>
                    <h2 class="home__subtitle">Musique</h2>
                </div>

                <div class="home__footer">
                    <h3 class="home__title-description">Vous êtes sur Hkat-Musique</h3>
                    <p class="home__description">Votre boîte à musique katangaise. <br>
                    </p>
                    <h3>Rénovez votre plaisir musical</h3>
                    <p>en profitant de la bonne musique selon vos préférences.</p>
                    <a href="contact.html" class="button button--flex">
                        <span class="button--flex">
                            <i class="icon icon-phone text-jaune button__icon"></i>  
                        </span>
                        <span class="home__price">Contactez-nous</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--=============== PRODUCTS ===============-->
    <section class="products section" id="products">
        <h2 class="section__title section__title-gradient products__line">
            {{$categorie_name}} Musique
        </h2>
        <div class="products__container" id="">
            @foreach ($song_categorie as $music)
            <article id="article_chanson">
                <div class="products__content">
                    <img src="{{asset('uploads/images/'.$music->cover_art)}}" alt="" class="img-heigth">
                    <h3 class="products__title">{{$music->title}}</h3>    
                    <button class="button button--flex products__button">
                        <i class="icon icon-play text-jaune button__icon"></i>
                    </button>
                    <div class="song">
                        <h3 class="products__title">{{$music->title}}</h3> 
                        <div class="progression">
                            <div class="barre">
                                <p class="temps"></p>
                            </div>
                            <div class="minuterie">
                                <p class="courant_min">34s</p>
                                <span>
                                    <i class="icon-play in_pause"></i>
                                    <i class="icon-pause in_play"></i>
                                </span>
                                <p class="total_min">4m</p>
                            </div>
                            <audio class="audio" src="{{asset('uploads/audios/'.$music->file_path)}}" controls></audio>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach

        </div><br>
        <main>
            <div class="pagenumbers" id="pagination"></div>
        </main>
    </section>
    <!--=============== DISCOUNT ===============-->
    <section class="discount section">
        <div class="discount__container container grid">
            <div class="discount__animate">
                <h2 class="discount__title">Joyeux noel et bonne année 2022</h2>
                <p class="discount__description">Si vous voulez bien bénéficier d'autres actualités dans le monde entier, cliquer sur le bouton ci-dessous.</p>
                <a href="#" class="button button--flex">
                    <i class="ri-shopping-bag-line button__icon"></i> Voir les news
                </a>
            </div>

            <img src="assets/img/home - Copie.png" alt="" class="discount__img">
        </div>
    </section>
</main>


@endsection