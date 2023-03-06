<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        // $count_song = $this->count_songs();
        // $count_user = $this->count_users();
        // return response()->json([
        //         'count_songs'=>$count_song,
        //         'count_users'=>$count_user
        //     ],200);

        return view('admin.pages.dashboard');
    }

    private function count_songs(){
        $counter = Song::count();
        return $counter;
    }

    private function count_users(){
        $counter = User::count();
        return $counter;
    }
}
