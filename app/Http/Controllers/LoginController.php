<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PesanModel;

class LoginController extends Controller
{
    // function index() {
    //     return view('login');
    // }

    // function Auth(Request $request) {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email:dns'],
    //         'password' => ['required']
    //     ]);
 
    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('/home');
    //     }
 
    //     return back()->with('loginError', 'Login failed');
    // }

    // function logout(Request $request) {
    //     Auth::logout();
 
    //     request()->session()->invalidate();
 
    //     request()->session()->regenerateToken();
 
    //     return redirect('/home');
    // }
    function showLoginForm()
    {
        $pageTitle = 'Login';

        return view('login', ['pageTitle' => $pageTitle]);
    }

    function login(request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // echo $request['email'];
        
        $b = User::where('email', $request['email'])->get('role');
        $akun = User::where('email', $request['email'])->get('name');
        foreach ($akun as $lihat) {
            $nama = $lihat->name;
        }

        if (preg_match("/0/", $b)) {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                $kirimStatus = '';
                $status = PesanModel::where('email', $request['email'])->get('status');
                foreach ($status as $lihat) {
                    $kirimStatus = $lihat->status;
                }
                if ($kirimStatus == null) {
                    return view('home', compact('nama'));
                }
                else {
                    return view('home', compact('nama', 'kirimStatus'));
                }
                // echo 'ini adalah info akun '.$akun;
                // echo 'ini adalah info pemesanan '. $RiwayatPembelianPengguna;
                // return view('home', compact('nama', 'kirimStatus'));
            }
        }
        else {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->route('admin_dashboard.index');
            }
        }


        // if ($b == '1') {
        //     $a = Validasi::where('role', '1');
        //     echo $a->email;
        // }
            // if(Auth::attempt($credentials)) {
            //     $request->session()->regenerate();
            //     return redirect()->intended('home');
            // }

        // return back()->with('loginError', 'login failed');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function index()
    {
        $pageTitle = 'Login';

        return view('home', ['pageTitle' => $pageTitle]);
    }
}
