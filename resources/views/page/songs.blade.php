@extends('layouts.front')
@section('content')
            <!---Weekly Top 15--->
            <div class="ms_weekly_wrapper">
                <div class="ms_weekly_inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ms_heading">
                                <h1>A la une</h1>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 padding_right40">

                            <div class="ms_divider"></div>

                        </div>
                        @foreach ($songs as $key => $item )
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
         
@endsection