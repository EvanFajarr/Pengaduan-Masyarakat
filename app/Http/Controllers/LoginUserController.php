<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\petugas15467;

class LoginUserController extends Controller
{
   
public function index(){
    return view('login.index');
    
}
public function login(Request $request){
    $request->validate([
        'nik'=>'required',
        'email'=>'required',
        'password'=>'required'
        ] ,[
            'nik'=>'Nik wajib diisi',
            'email'=>'Email wajib diisi',
            'password'=>'Pasword wajib diisi',
        ]);
        $infologin=[
            'nik'=>$request->nik,
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if (Auth::guard('Petugas15467')->attempt($infologin)){
               return redirect('/home')->with('success','Berhasil Login ');
        }else{
        return redirect('/')->withErrors('Username dan Password salah');
        }
  
}
// public function logout(){
//     Auth::logout();
//     return redirect('/')->withErrors('success','Berhasil Logout');
//     }
    function register() {
        return view('login/register');
    }
    function create (Request $request){
        $request->validate([
            'name'=>'required',
            'nik'=>'required|unique:userregist',
            'tlp'=>'required|min:11',
            'email'=>'required|email|unique:userregist',
            'password'=>'required|min:6',
            // 'rolle'=>'required',
            ] ,[
                'name'=>'Name wajib diisi',
                'nik'=>'NIK harus diisi',
                'nik.unique'=>'NIK sudah digunakan',
                'tlp'=>'nomor handphone harus diisi',
                'tlp.min'=>'nomor handphone  harus lebih dari 10',
                'email'=>'Email wajib diisi',
                'email.email'=>'Silahkan masukan email dengan benar',
                'email.unique' => 'Email sudah digunakan, silakan masukkan email yang lain',
                'password'=>'Pasword wajib diisi',
                'password.min'=>'Pasword harus lebih dari 6',
            ]);

            
    $data = [
        'name' => $request->name,
        'nik' => $request->nik,
        'tlp' => $request->tlp,
        'email' => $request->email,
        // 'rolle' => $request->rolle,
        'password' => Hash::make($request->password)
    ];
    Petugas15467::create($data);

            $infologin=[
                'name'=>$request->name,
                'nik'=>$request->nik,
                'tlp'=>$request->tlp,
                'email'=>$request->email,
                'password'=>$request->password,
                // 'rolle'=>$request->rolle,
            ];
            if(Auth::attempt($infologin)) {
                return redirect('/home')->with('success','Berhasil login');
            }else{
            return redirect('/')->withErrors('Silahkan Login ');
            }
    }
    public function logout(Request $request){
        // Auth::logout();
        // return redirect('/')->withErrors('success','Berhasil Logout');
        // }
        if(Auth::guard('Petugas15467')->check()){
            Auth::guard('Petugas15467')->logout();
        }
           return redirect()->route('login');;

        }

}