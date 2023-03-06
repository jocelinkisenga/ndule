document.getElementById('app').classList.add("none");


function showContent() {
    document.querySelector(".preloader-wrap").classList.add("hidden");
    document.getElementById('app').classList.remove("none");
}
setTimeout(showContent, 1000);
/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close'),
      navbarTogle = document.getElementById('navbarTogle')
      

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
        navbarTogle.classList.remove('icon-view_headline')
        navbarTogle.classList.add('icon-times')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader(){
    const header = document.getElementById('header')
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 50) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*=============== SHOW SCROLL UP ===============*/ 
function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 200 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 200) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp);

// pagination

var katangaContainer = document.getElementById('katanga');
var gospelContainer = document.getElementById('gospel');
var internationalContainer = document.getElementById('international');
const katanga = [
    {
        nomArtist: "Hugo",
        titreChanson: "Aka kamwimbo",
        photo: "assets/img/song.png",
        chanson: "assets/chansons/4.mp3"
    },
    {
        nomArtist: "Kannierra",
        titreChanson: "rj_kanierra_bange",
        photo: "assets/img/song.png",
        chanson: "assets/chansons/dj_seven_x_rj_kanierra_bange_mp3_66768.mp3"
    },
    {
        nomArtist: "Pson",
        titreChanson: "pson_toluka_mbongo",
        photo: "assets/img/song.png",
        chanson: "assets/chansons/pson_toluka_mbongo_clip_officiel_mp3_66364.mp3"
    },
    {
        nomArtist: "L'homanix",
        titreChanson: "L'homanix Oncle Moise",
        photo: "assets/img/song.png",
        chanson: "assets/chansons/oncle_moise_by_lhomanix_kyanzila_mp3_66956.mp3"
    }
];
const gospel = [
    {
        nomArtist: "Mike Kalambay",
        titreChanson: "Fongolela mike",
        photo: "assets/img/song.png",
        chanson: "assets/chansons/mike_kalambay_fongolela_ngai_lola_video_officielle_mp3_67016.mp3"
    },
    {
        nomArtist: "Franck",
        titreChanson: "Franck Nadji vunia",
        photo: "assets/img/song.png",
        chanson: "assets/chansons/franck_banza_nadji_vunia_clip_integrale_hd_mp3_67478.mp3"
    },
    {
        nomArtist: "Rosny",
        titreChanson: "Rosny nazo bondelayo",
        photo: "assets/img/song.png",
        chanson: "assets/chansons/rosny_kayiba_nazo_bondela_yo_je_te_prie_clip_officiel_mp3_67357.mp3"
    },
    {
        nomArtist: "Marcello",
        titreChanson: "Past Marcelo Viens",
        photo: "assets/img/song.png",
        chanson: "assets/chansons/past_marcello_tunasi_viens_clip_officiel_mp3_67210.mp3"
    }
];
const international = [
    {
        nomArtist: "Nicky Minaj",
        titreChanson: "Nicky Minaj Chun-li",
        photo: "assets/img/song.png",
        chanson: "assets/chansons/2.mp3"
    },
    {
        nomArtist: "Soan",
        titreChanson: "SOAN The voice kids",
        photo: "assets/img/song.png",
        chanson: "assets/chansons/bob_marley_redemption_song_soan_the_voice_kids_france_2019_demi-finale_mp3_67545.mp3"
    },
    {
        nomArtist: "CNCO",
        titreChanson: "CNCO-Beso",
        photo: "assets/img/song.png",
        chanson: "assets/chansons/cnco_beso_official_video_mp3_67597.mp3"
    },
    {
        nomArtist: "Kalash",
        titreChanson: "Arrêt du coeur",
        photo: "assets/img/song.png",
        chanson: "assets/chansons/6.mp3"
    }
];
            
let namecatgory = document.querySelector('.section__title');        
var rows = 0;
function DisplaySong(tabChansons, category){
    tabChansons.forEach(song=>{
        let html = `
            <article id="article_chanson">
                <div class="products__content">
                    <img src="${song.photo}" alt="" class="img-heigth">
                    <h3 class="products__title">${song.titreChanson}</h3>    
                    <button class="button button--flex products__button">
                        <i class="icon icon-play text-jaune button__icon"></i>
                    </button>
                    <div class="song">
                        <h3 class="products__title">${song.titreChanson}</h3> 
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
                            <audio class="audio" src="${song.chanson}" controls></audio>
                        </div>
                    </div>
                </div>
            </article>
        `;
        if(rows < 20){
            category.insertAdjacentHTML('beforeend', html);
            rows++;
        }  
    });
}
DisplaySong(international, internationalContainer);
DisplaySong(katanga, katangaContainer);
DisplaySong(gospel, gospelContainer);