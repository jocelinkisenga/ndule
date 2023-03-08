@php
    use App\Models\Song;
    $last = Song::latest()->limit(1)->get();
@endphp
<div class="ms_header">
    <div class="ms_top_left">
        <div class="ms_top_search">
            <input type="text" class="form-control" placeholder="Search Music Here..">
            <span class="search_icon">
                <img src="{{asset('clients/images/svg/search.svg')}}" alt="">
            </span>
        </div>
        <div class="ms_top_trend">
            <span><a href="#"  class="ms_color">A la une :</a></span> <span class="top_marquee"><a href="#">{{$last[0]->title}}</a></span>
        </div>
    </div>
    <div class="ms_top_right">

        {{-- <div class="ms_top_btn">
            @guest
            <a href="{{route('register')}}" class="ms_btn reg_btn" data-toggle="modal" data-target="#myModal"><span>inscription</span></a>
            <a href="{{route('login')}}" class="ms_btn login_btn" data-toggle="modal" data-target="#myModal1"><span>connexion</span></a>
            @endguest
            @auth
            <div class="ms_top_lang">
                <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit"  class="ms_btn login_btn">Deconnexion</button>
                </form>
                {{-- <span data-toggle="modal" data-target="#lang_modal">languages <img src="images/svg/lang.svg" alt=""></span> 
            </div>
            <a href="{{route('login')}}" class="ms_btn login_btn" data-toggle="modal" data-target="#myModal1"><span>profile</span></a>
            @endauth
        </div> --}}
    </div>
</div>