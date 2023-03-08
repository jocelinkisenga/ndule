<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hkat-musique</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('clients/css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('clients/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('clients/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('clients/js/plugins/swiper/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('clients/js/plugins/nice_select/nice-select.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('clients/js/plugins/player/volume.css')}}">
	<link rel="stylesheet" type="text/css" href="{{secure_asset('clients/js/plugins/scroll/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('clients/css/style.css')}}">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    @livewireStyles
</head>

<body>
	<!----Loader Start---->
	{{-- <div class="ms_loader">
		<div class="wrap">
		  <img src="{{secure_asset('clients/images/loader.gif')}}" alt="">
		</div>
	</div> --}}
    <!----Main Wrapper Start---->
    <div class="ms_main_wrapper">
        <!---Side Menu Start--->
@include("components.aside")
        <!---Main Content Start--->
        <div class="ms_content_wrapper padder_top80">
            <!---Header--->

            @include('components.header')

            @yield('content')


            <div class="ms_footer_wrapper">
                <div class="ms_footer_logo">
                    <a href="index.html"><img src="images/open_logo.png" alt=""></a>
                </div>
                <div class="ms_footer_inner">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="footer_box">
                                <h1 class="footer_title">NDULE</h1>
                                <p>pour la propultion de la musique locale. <br>
                                Nous vous aidons à montrer au monde entier <br> ce que vous êtes capable de faire!</p>
                            </div>
                        </div>
                        {{-- <div class="col-lg-3 col-md-6">
                            <div class="footer_box footer_app">
                                <h1 class="footer_title">Download our App</h1>
                                <p>Go Mobile with our app.<br> Listen to your favourite songs at just one click. Download Now !</p>
                                <a href="#" class="foo_app_btn"><img src="images/google_play.jpg" alt="" class="img-fluid"></a>
                                <a href="#" class="foo_app_btn"><img src="images/app_store.jpg" alt="" class="img-fluid"></a>
                                <a href="#" class="foo_app_btn"><img src="images/windows.jpg" alt="" class="img-fluid"></a>
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-3 col-md-6">
                            <div class="footer_box footer_subscribe">
                                <h1 class="footer_title">subscribe</h1>
                                <p>Subscribe to our newsletter and get latest updates and offers.</p>
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group">
                                        <a href="#" class="ms_btn">sign me up</a>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        <div class="col-lg-6 col-md-6">
                            <div class="footer_box footer_contacts">
                                <h1 class="footer_title">contact us</h1>
                                <ul class="foo_con_info">
                                    <li>
                                        <div class="foo_con_icon">
                                            <img src="{{secure_asset('clients/images/svg/phone.svg')}}" alt="">
                                        </div>
                                        <div class="foo_con_data">
                                            <span class="con-title"> whatsapp <i class="fa fa-whatsapp" aria-hidden="true"></i> :</span>
                                            <span>(+243) 850-244-690</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="foo_con_icon">
                                            <img src="{{secure_asset('clients/images/svg/message.svg')}}" alt="">
                                        </div>
                                        <div class="foo_con_data">
                                            <span class="con-title">email  :</span>
                                            <span><a href="#">kisengajocelin7@gmail.com</a>, <a href="#"></a></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="foo_sharing">
                                    <div class="share_title">follow us :</div>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----Copyright---->
                <div class="col-lg-12">
                    <div class="ms_copyright">
                        <div class="footer_border"></div>
                        <p>Copyright &copy; 2023 <a href="#">Ndule</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
            <!----Audio Player Section---->
<livewire:player>
        </div>
        <!----Register Modal Start---->
        <!-- Modal register -->
    @include('components.register')
    
        <!----Language Selection Modal---->
        <div class="ms_lang_popup">
            <div id="lang_modal" class="modal  centered-modal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="fa_icon form_close"></i>
                        </button>
                        <div class="modal-body">
                            <h1>language selection</h1>
                            <p>Please select the language(s) of the music you listen to.</p>
                            <ul class="lang_list">
                                <li>
                                    <label class="lang_check_label">
                                English 
                                <input type="checkbox" name="check"> 
                                <span class="label-text"></span>
                                </label>
                                </li>
                                <li>
                                    <label class="lang_check_label">
                                hindi
                                <input type="checkbox" name="check"> 
                                <span class="label-text"></span>
                                </label>
                                </li>
                                <li>
                                    <label class="lang_check_label">
                                punjabi
                                <input type="checkbox" name="check"> 
                                <span class="label-text"></span>
                                </label>
                                </li>
                                <li>
                                    <label class="lang_check_label">
                                French
                                <input type="checkbox" name="check"> 
                                <span class="label-text"></span>
                                </label>
                                </li>
                                <li>
                                    <label class="lang_check_label">
                                 German 
                                <input type="checkbox" name="check"> 
                                <span class="label-text"></span>
                                </label>
                                </li>
                                <li>
                                    <label class="lang_check_label">
                                Spanish
                                <input type="checkbox" name="check"> 
                                <span class="label-text"></span>
                                </label>
                                </li>
                                <li>
                                    <label class="lang_check_label">
                                Chinese
                                <input type="checkbox" name="check"> 
                                <span class="label-text"></span>
                                </label>
                                </li>
                                <li>
                                    <label class="lang_check_label">
                                Japanese 
                                <input type="checkbox" name="check"> 
                                <span class="label-text"></span>
                                </label>
                                </li>
                                <li>
                                    <label class="lang_check_label">
                                Arabic
                                <input type="checkbox" name="check"> 
                                <span class="label-text"></span>
                                </label>
                                </li>
                                <li>
                                    <label class="lang_check_label">
                                 Italian
                                <input type="checkbox" name="check"> 
                                <span class="label-text"></span>
                                </label>
                                </li>
                            </ul>
                            <div class="ms_lang_btn">
                                <a href="#" class="ms_btn">apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----Queue Clear Model ---->
        {{-- <div class="ms_clear_modal">
            <div id="clear_modal" class="modal  centered-modal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="fa_icon form_close"></i>
                        </button>
                        <div class="modal-body">
                            <h1>Are you sure you want to clear your queue?</h1>
                            <div class="clr_modal_btn">
                                <a href="#">clear all</a>
                                <a href="#">cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!----Queue Save Modal---->
            @livewireScripts

        <!--Main js file Style-->
        <script type="text/javascript" src="{{secure_asset('clients/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('clients/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('clients/js/plugins/swiper/js/swiper.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('clients/js/plugins/player/jplayer.playlist.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('clients/js/plugins/player/jquery.jplayer.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('clients/js/plugins/player/audio-player.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('clients/js/plugins/player/volume.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('clients/js/plugins/nice_select/jquery.nice-select.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('clients/js/plugins/scroll/jquery.mCustomScrollbar.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('clients/js/custom.js')}}"></script>



        <script>
            "use strict";

            Livewire.on('songPlayer', music => {
                var songs = music
              
                console.log(songs)








            $(function() {
    "use strict";
    if ($('.audio-player').length) {
		var myPlayListOtion = '<ul class="more_option"><li><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul>';
		
        var myPlaylist = new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_1",
            cssSelectorAncestor: "#jp_container_1"
        }, [{
            image : "uploads/images/"+ songs.cover_art,	
            title: songs.title,
            artist: songs.artist_name,
            mp3:"uploads/audios/"+songs.file_path,
            option : myPlayListOtion
        }], {
            swfPath: "js/plugins",
            supplied: "oga, mp3",
            wmode: "window",
            useStateClassSkin: true,
            autoBlur: false,
            smoothPlayBar: true,
            keyEnabled: true,
            playlistOptions: {
                autoPlay: false
            }
        });
        $("#jquery_jplayer_1").on($.jPlayer.event.ready + ' ' + $.jPlayer.event.play, function(event) {
            var current = myPlaylist.current;
            var playlist = myPlaylist.playlist;
            $.each(playlist, function(index, obj) {
                if (index == current) {
                    $(".jp-now-playing").html("<div class='jp-track-name'><span class='que_img'><img src='"+obj.image+"'></span><div class='que_data'>" + obj.title + " <div class='jp-artist-name'>" + obj.artist + "</div></div></div>");
                }
            });
			$('.knob-wrapper').mousedown(function() {
                $(window).mousemove(function(e) {
                    var angle1 = getRotationDegrees($('.knob')),
					volume = angle1 / 270 					
					
                    if (volume > 1) {
                        $("#jquery_jplayer_1").jPlayer("volume", 1);
                    } else if (volume <= 0) {
                        $("#jquery_jplayer_1").jPlayer("mute");
                    } else {
                        $("#jquery_jplayer_1").jPlayer("volume", volume);
                        $("#jquery_jplayer_1").jPlayer("unmute");
                    }
                });
				
                return false;
            }).mouseup(function() {
                $(window).unbind("mousemove");
            });
			
			
			function getRotationDegrees(obj) {
				var matrix = obj.css("-webkit-transform") ||
				obj.css("-moz-transform")    ||
				obj.css("-ms-transform")     ||
				obj.css("-o-transform")      ||
				obj.css("transform");
				if(matrix !== 'none') {
					var values = matrix.split('(')[1].split(')')[0].split(',');
					var a = values[0];
					var b = values[1];
					var angle = Math.round(Math.atan2(b, a) * (180/Math.PI));
				} else { var angle = 0; }
				return (angle < 0) ? angle + 360 : angle;
			}

			
			
			
			
            var timeDrag = false;
            $('.jp-play-bar').mousedown(function(e) {
                timeDrag = true;
                updatebar(e.pageX);
				
            });
            $(document).mouseup(function(e) {
                if (timeDrag) {
                    timeDrag = false;
                    updatebar(e.pageX);
                }
            });
            $(document).mousemove(function(e) {
                if (timeDrag) {
                    updatebar(e.pageX);
                }
            });
            var updatebar = function(x) {
                var progress = $('.jp-progress');
                var position = x - progress.offset().left;
                var percentage = 100 * position / progress.width();
                if (percentage > 100) {
                    percentage = 100;
                }
                if (percentage < 0) {
                    percentage = 0;
                }
                $("#jquery_jplayer_1").jPlayer("playHead", percentage);
                $('.jp-play-bar').css('width', percentage + '%');
            };
            $('#playlist-toggle, #playlist-text, #playlist-wrap li a').unbind().on('click', function() {
                $('#playlist-wrap').fadeToggle();
                $('#playlist-toggle, #playlist-text').toggleClass('playlist-is-visible');
            });
            $('.hide_player').unbind().on('click', function() {
                $('.audio-player').toggleClass('is_hidden');
                $(this).html($(this).html() == '<i class="fa fa-angle-down"></i> HIDE' ? '<i class="fa fa-angle-up"></i> SHOW PLAYER' : '<i class="fa fa-angle-down"></i> HIDE');
            });
            $('body').unbind().on('click', '.audio-play-btn', function() {
                $('.audio-play-btn').removeClass('is_playing');
                $(this).addClass('is_playing');
                var playlistId = $(this).data('playlist-id');
                myPlaylist.play(playlistId);
            });
			
        });
    }
});

      
})
        </script>
    </body>
    
    </html>