<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class mailController extends Controller
{
    //
    /**
     *
     */
    public function send()
    {
       Mail::send(['text'=>'mail'],['name','Web dev blog'],function ($message){

       $message->to('superesenou.kg@gmail.com', 'To web dev blog')->subject('Test email');
       $message->from('superesenou.kg@gmail.com', 'Web dev blog');


       });
    }
}
