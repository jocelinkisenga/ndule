<?php

namespace App\Http\Controllers;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Repositories\FileRepositorie;
use App\Http\Repositories\PhotoRepositorie;


class ArticleController extends Controller
{
    public $new_name;

    public function index(){
        return view("page.news");
    }

    public function create(){
        $articles = Article::all();
        return view('Admin.page.addArticle',compact('articles'));
    }



    public function store (Request $request, PhotoRepositorie $photoRepositorie){
      
        $photoRepositorie->save_photo($request->photo);
        
        $this->new_name = FileRepositorie::rename_file($request->photo);
            
            Article::create([
                        'title'=>$request->title,
                        'description'=>$request->description,
                        'photo'=>$this->new_name
                        ]);

                        return redirect()->back();
        }

    public function show(int $id){

    }

    public function update(int $id){

    }
}
