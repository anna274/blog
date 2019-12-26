<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function getIndex(){ // it redirects to home page(Index page)
        return view('posts.index');
    }
    public function getPost(){ // it redirects to home page(Index page)
        return view('pages.post');
    }
    public function getRecipePost(){ // it redirects to home page(Index page)
        return view('pages.recipe_post');
    }
} 

    // public function getAbout(){ // это не нужно для работы, но хдесь пример передачи переменных
    //     $first = "Anna";
    //     $second = "Rusakovich";
    //     $full = $first." ".$second;
    //     $email = "anna_rusakovich.01@mail.ru";
    //     return view('pages.about')->withFullname($full)->withEmail($email); // we sent to view variable: name - fullname, value = $full
    // }

/* What is happening in the controller:
    1. process variable data or parametres
    2. talk to model
    3. recieve from the model
    4. compile or process data from the model if needed
    5. pass thar data to the correct view
*/

/* ->with()

    1.  ->with("variable_name", &varialble_value) or ->withVariable_name(&value)
         it sents variables to view
    2.  ->with(...)->with(...) - sents several variables 
    3.  we can use 1. to sent array*/