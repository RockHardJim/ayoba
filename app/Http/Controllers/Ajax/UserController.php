<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User};

class UserController extends Controller
{
    //
    private $user;
    private $points;

    public function __construct()
    {
        $this->user = new User();
    }

    public function user(Request $request){
        if(!$this->user::where('user', $request->user)->get()){
            return response()->json([
                'status' => 'failed',
                'message' => 'Hi we could not find your user account please wait while we redirect you to your user registration'
            ]);
        } else {

        }
    }

    public function create(Request $request){
        switch($request->type){
            case 'user':


            case 'profile':


            case 'type':


            default:
            return response()->json([
                'status' => 'failed',
                'message' => 'Hi we could not complete your registration due to an unknown error'
            ]);
        }
    }
}
