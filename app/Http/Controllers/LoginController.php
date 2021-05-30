<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/main';

    /**

    
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('logo');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeLogin(Request $request)
    {
        ///

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user1=null;
        //select
        $user1 = User::where('email', $request->email )->first();
        //  dd($request,$user1,$request->email,$user1->email);
         if($user1->email !=null){
            if(strcmp('$request->password','$user1->password')==1){
                // dd('true');
                return redirect('/');
            }
            else {
               
                return back()->withErrors(['password is wrong', 'password error']);
            }
         }
       else{
        //    dd('else');
      return back()->withErrors(['email .required', 'email error']);
    
       }
       
      
       
//logout method
//     private function logout()
// {
//     \Auth::logout();

//     return redirect()->route('login');
// }


   
    }


}
