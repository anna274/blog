<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    public function getCategory($id=null){
        $category=Category::find($id);
        return view('category', compact('category'));
    }
}
