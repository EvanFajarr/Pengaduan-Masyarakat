<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('loginPetugas.index');
        
    }
    public function loginPetugas(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
            // 'rolle'=>'required',
            ] ,[
                'email'=>'Email wajib diisi',
                'password'=>'Pasword wajib diisi',
            ]);
            $infologin=[
                'email'=>$request->email,
                'password'=>$request->password,
                // 'rolle'=>$request->rolle,
            ];
            if (Auth::guard('user')->attempt($infologin)) {
              
                    return redirect('/admin')->with('success','Berhasil login Admin');
            
            }else{
            return redirect('loginPetugas')->withErrors('Username dan Password salah');
            }
      
    }
   public function logout(Request $request){
        // Auth::logout();
        // return redirect('/')->withErrors('success','Berhasil Logout');
        // }
        if(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }
           return redirect()->route('login');;

        }


}
