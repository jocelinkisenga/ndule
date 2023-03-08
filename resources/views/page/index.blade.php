@extends("layouts.front")
@section('content')
    
            <!---Banner--->
            <div class="ms-banner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="ms_banner_img">
                                <img src="{{asset('clients/images/song.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="ms_banner_text ">
                                <h1>c'est sur</h1>
                                <h1 class="ms_color">Ndule !</h1>
                                <p>promouvoir la musique locale<br> La meilleur plate-forme de streaming ...</p>
                                <div class="ms_banner_btn">
                                    <a href="{{route('all-songs')}}" class="ms_btn">Ecouter maintenant</a>
                                    {{-- <a href="#" class="ms_btn">Add To Queue</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---Recently Played Music--->

            <!---Weekly Top 15--->
            <div class="ms_weekly_wrapper">
                <div class="ms_weekly_inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ms_heading">
                                <h1>Cette semaine Top  15</h1>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 padding_right40">

                            <div class="ms_divider"></div>

                        </div>
                        @foreach ($weekly as $key => $item )
                        <div class="col-lg-4 col-md-12">
                            <div class="ms_weekly_box">
                                <div class="weekly_left">
                                    <span class="w_top_no">
										{{$key+1}}
									</span>
                                    <div class="w_top_song">
                                        <div class="w_tp_song_img">
                                            <img src="{{asset('uploads/images/'.$item->cover_art)}}" alt="" class="img-fluid">
                                            <div class="ms_song_overlay">
                                            </div>
                                            <livewire:button-player :musicid="$item->id">
                                        </div>
                                        <div class="w_tp_song_name">
                                            <h3><a href="#">{{$item->title}}</a></h3>
                                            <p>{{$item->artist_name}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="weekly_right">
                                    <span class="w_song_time">({{$item->vues->count()}}) lus</span>
                                    <span class="ms_more_icon" data-other="1">
										<img src="{{asset('images/svg/more.svg')}}" alt="">									
									</span>
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
         
			<div class="ms_advr_wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<a href="#"><img src="images/adv.jpg" alt="" class="img-fluid"/></a>
						</div>
					</div>
				</div>
			</div>
            <!----New Releases Section Start---->
            <div class="ms_releases_wrapper">
                <div class="ms_heading">
                    <h1>New singles</h1>
                    <span class="veiw_all"><a href="#">view more</a></span>
                </div>
                <div class="ms_release_slider swiper-container">
                    <div class="ms_divider"></div>
                    <div class="swiper-wrapper">

                        @foreach ($latest as $item)
                        <div class="swiper-slide">
                            <div class="ms_release_box">
                                <div class="w_top_song">
                                    <span class="slider_dot"></span>
                                    <div class="w_tp_song_img">
                                        <img src="{{asset('uploads/images/'.$item->cover_art)}}" alt="">
                                        <div class="ms_song_overlay">
                                        </div>
                                        <livewire:button-player :musicid="$item->id">
                                    </div>
                                    <div class="w_tp_song_name">
                                        <h3><a href="#">{{$item->tite}}</a></h3>
                                        <p>{{$item->artist_name}}</p>
                                    </div>
                                </div>
                                <div class="weekly_right">
                                    <span class="w_song_time"></span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next2 slider_nav_next"></div>
                <div class="swiper-button-prev2 slider_nav_prev"></div>
            </div>
            <!----Featured Albumn Section Start---->
            <!---Featured Artists Music--->
            <div class="ms_featured_slider">
                <div class="ms_heading">
                    <h1>Featured Artists</h1>
                    <span class="veiw_all"><a href="#">view more</a></span>
                </div>
                <div class="ms_feature_slider swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($artists as $artist)
                        <div class="swiper-slide">
                            <div class="ms_rcnt_box">
                                <div class="ms_rcnt_box_img">
                                    <img src="{{asset('uploads/images/'.$artist->image)}}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{asset('clients/images/svg/more.svg')}}" alt="">
                                        </div>
                                     
                                    </div>
                                </div>
                                <div class="ms_rcnt_box_text">
                                    <h3><a href="{{route('artiste-detail',['id'=>$artist->id])}}">{{$artist->name}}</a></h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next1 slider_nav_next"></div>
                <div class="swiper-button-prev1 slider_nav_prev"></div>
            </div>
			<!----Add Section Start---->
			<div class="ms_advr_wrapper ms_advr2">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<a href="#"><img src="images/adv1.jpg" alt="" class="img-fluid"/></a>
						</div>
					</div>
				</div>
			</div>

            <!----Main div close---->
        </div>
        <!----Footer Start---->


@endsection
