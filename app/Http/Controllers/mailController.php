<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class mailController extends Controller
{
    public function send()
    {
        Mail::send(['text' => 'mail'], ['name', 'HOW TO LIVE'], function($message)
        {
            $message->to('irinushirka@gmail.com', 'To Irina Skurko')->subject('Test mail');
            $message->from('irinushirka@gmail.com', 'HOW TO LIVE');
        }
    );
    }
}
/*comment*/
/*tak nada*/