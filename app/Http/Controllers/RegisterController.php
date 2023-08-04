<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\RegisterModel;
use App\Models\User;
use App\Models\admin_tablesModel;

class RegisterController extends Controller
{
    // function Register(Request $request) {
    //     $validatedData = $request->validate([
    //         'nama' => 'required|max:255',
    //         'email' => 'required|unique:registrasi',
    //         'password' => 'required',
    //     ]);
 
    //     $validatedData['password'] = Hash::make($validatedData['password']);
 
    //     RegisterModel::create($validatedData);
    //     return redirect('/login')->with('success', 'Registration Succesfull! Please Login');
    // }
    
    // function index() {
    //     return view('register');
    // }
    function index()
    {
        $pageTitle = 'Register';

        return view('register', ['pageTitle' => $pageTitle]);
    }

    function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            // 'username' => 'required|min:5|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'role' => 'required'
        ]);

        User::create($validatedData);
        return redirect('/login')->with('success', 'Berhasil Terkirim.');
    }
}
