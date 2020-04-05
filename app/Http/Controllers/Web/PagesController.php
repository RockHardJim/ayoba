<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function home(Request $request){
        return view('site.home');
    }

    public function register(Request $request, $page){
        switch($page){
            case 'user':

            case 'profile':

            case 'type':
        }
    }
}
