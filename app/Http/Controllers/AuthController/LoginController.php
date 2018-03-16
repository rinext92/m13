<?php

namespace App\Http\Controllers\AuthController;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function index(){
        return view('login');
    }


    public function doLogin(Request $request){

        $user = array('username' => $request->username, 'password' => $request->pwd);

        if(Auth::attempt($user))
         {
            if (Auth::check()){
                return view('index');
                // dd('masuk'.Auth::user()->email);
            }else{
                dd('xmsk');
            }
            
        }else{
            dd('x');
        }
       
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
