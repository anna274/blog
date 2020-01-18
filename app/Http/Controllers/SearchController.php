<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
    public function getIndex(){

        $poisk = $_GET['findme'];
        // Контроллер ищет частичные совпадения
        $objs = Post::where('title','LIKE', '%'.$poisk.'%')
                ->orWhere('body','LIKE','%'.$poisk)
                ->orderBy('title')
                ->limit(50)
                ->get();
        return view('search', compact('objs','poisk'));
    }
}
