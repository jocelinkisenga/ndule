<div>
   
  
    <div class="ms_player_wrapper">
        <div class="ms_player_close">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </div>
        <div class="player_mid">
            <div class="audio-player">
                <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                    <div class="player_left">
                        <div class="ms_play_song">
                            <div class="play_song_name">
                                <a href="javascript:void(0);" id="playlist-text">
                                    <div class="jp-now-playing flex-item">
                                        <div class="jp-track-name"></div>
                                        <div class="jp-artist-name"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        {{-- <div class="play_song_options">
                            <ul>
                                <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_download"></i></span>download now</a></li>
                                <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_fav"></i></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_playlist"></i></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_share"></i></span>Share</a></li>
                            </ul>
                        </div> --}}
                        <span class="play-left-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    </div>
                    <!----Right Queue---->
                    <div class="jp_queue_wrapper">
                        <span class="que_text" id="myPlaylistQueue"><i class="fa fa-angle-up" aria-hidden="true"></i> queue</span>
                        <div id="playlist-wrap" class="jp-playlist">
                            <div class="jp_queue_cls"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <h2>queue</h2>
                            <div class="jp_queue_list_inner">
                                <ul>
                                    <li>&nbsp;</li>
                                </ul>
                            </div>
                            <div class="jp_queue_btn">
                                <a href="javascript:;" class="ms_clear" data-toggle="modal" data-target="#clear_modal">clear</a>
                                <a href="clear_modal" class="ms_save" data-toggle="modal" data-target="#save_modal">save</a>
                            </div>
                        </div>
                    </div>
                    <div class="jp-type-playlist">
                        <div class="jp-gui jp-interface flex-wrap">
                            <div class="jp-controls flex-item">
                                <button class="jp-previous" tabindex="0">
                <i class="ms_play_control"></i>
            </button>
                                <button class="jp-play" tabindex="0">
                <i class="ms_play_control"></i>
            </button>
                                <button class="jp-next" tabindex="0">
                <i class="ms_play_control"></i>
            </button>
                            </div>
                            <div class="jp-progress-container flex-item">
                                <div class="jp-time-holder">
                                    <span class="jp-current-time" role="timer" aria-label="time">&nbsp;</span>
                                    <span class="jp-duration" role="timer" aria-label="duration">&nbsp;</span>
                                </div>
                                <div class="jp-progress">
                                    <div class="jp-seek-bar">
                                        <div class="jp-play-bar">
                                            <div class="bullet">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-volume-controls flex-item">
                                <div class="widget knob-container">
                                    <div class="knob-wrapper-outer">
                                        <div class="knob-wrapper">
                                            <div class="knob-mask">
                                                <div class="knob d3"><span></span></div>
                                                <div class="handle"></div>
                                                <div class="round">
                                                    <img src="images/svg/volume.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <input></input> -->
                                    </div>
                                </div>
                            </div>
                            <div class="jp-toggles flex-item">
                                <button class="jp-shuffle" tabindex="0" title="Shuffle">
                                <i class="ms_play_control"></i></button>
                                <button class="jp-repeat" tabindex="0" title="Repeat"><i class="ms_play_control"></i></button>
                            </div>
                            <div class="jp_quality_optn custom_select">
                                <select>
                    <option>quality</option>
                    <option value="1">HD</option>
                    <option value="2">High</option>
                    <option value="3">medium</option>
                    <option value="4">low</option>
                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--main div-->
    </div>
    <script>
"use strict";
        // var songs = {!! (!empty($music)) ? json_encode($music->toArray()) : "" !!}

        // console.log(songs);
        window.addEventListener('name-updated', event => {

            
            var songs = Object.values(event.detail.song);



            $(function() {
   
   
   

    function list_songs(songs){

        for(var i=0; i < songs.length; i++){
           
        return     {

        image : "uploads/images/"+ songs[i].cover_art,	
        title: songs[i].title,
        artist: songs[i].artist_name,
        mp3:"uploads/audios/"+songs[i].file_path,
        option : myPlayListOtion
    }
        }
    }



    // {

    //     image : 'clients/images/weekly/song1.jpg',	
    //     title: "Cro Magnon Man",
    //     artist: "Mushroom Records",
    //     mp3: "lost.mp3",
    //     oga: "http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg",
    //     option : myPlayListOtion
    // }

    if ($('.audio-player').length) {
		var myPlayListOtion = '';
		
        var myPlaylist = new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_1",
            cssSelectorAncestor: "#jp_container_1"
        }, [
            list_songs(songs)


    ], {
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
                    $(".jp-now-playing").html("<div class='jp-track-name'><span class='que_img'></span><div class='que_data'>" + obj.title + " <div class='jp-artist-name'>" + obj.artist + "</div></div></div>");
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
            
});
        
    //    for(var i=0; i < songs.length; i++){
    //     console.log(songs[i].title)
    //    }
    </script>
</div>
