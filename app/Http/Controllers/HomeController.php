<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Foods;

class HomeController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function menu(){
        
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;

            if($usertype=='user'){
                return view('user.userhome');
            }
            else if($usertype=='admin'){
                return view('admin.adminhome');
            }
            else{
                return redirect()->back();
            }
        }
        else {
            return view('user.userhome');
        }
    }

}
