<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;

class MainController extends Controller
{
    function index()
    {
     return view('login.login');
    }

    function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect('main/successlogin');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }

    function successlogin()
    {
     //return view('login.successlogin');
     return redirect('announcement');
    }

    function logout()
    {
     Auth::logout();
     return redirect('announcement');
    }

    function update(Request $request, $id){
        $userBookData = User::find($id);
        $userBookData->book = 1;
        $userBookData->save();
        return redirect('/announcement');
    }

    function update2(Request $request, $id){
        $userBookData = User::find($id);
        $userBookData->book = 0;
        $userBookData->save();
        return redirect('/announcement');
    }
}

?>