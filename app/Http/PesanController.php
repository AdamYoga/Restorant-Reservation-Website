<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PesanModel;
use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menggunakan Eloquent untuk mengambil semua rekaman dari PesanModel
        $pesan = PesanModel::all();

        return view('/pesan', [
            'pesan' => $pesan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Reservasi';
        // RAW SQL Query
        return view('/pesan', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $messages = [
        //     'required' => ':Attribute harus diisi.',
        //     'email' => 'Isi :attribute dengan format yang benar',
        //     'min' => ':Attribute minimal :min karakter'
        // ];

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'date' => 'required',
        //     'time' => 'required',
        //     'people' => 'required',
        //     'message' => 'required',
        // ]);



        // ELOQUENT
        // $pesan = New PesanModel;
        // $pesan->name = $request->name;
        // $pesan->email = $request->email;
        // $pesan->phone = $request->phone;
        // $pesan->date = $request->date;
        // $pesan->time = $request->time;
        // $pesan->people = $request->people;
        // $pesan->message = $request->message;
        // if ($file != null) {
        // $pesan->original_filename = $originalFilename;
        // $pesan->encrypted_filename = $encryptedFilename;
        // }
        // $pesan->save();

        $file = $request->file('pay');
        if ($file != null) {
            $originalFilename = $file->getClientOriginalName();
            $encryptedFilename = $file->hashName();
            // Store File
            $file->store('public/bukti');
        } else {
            $originalFilename = '';
            $encryptedFilename = '';
        }

        // INSERT QUERY
        DB::table('booking')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'time' => $request->time,
            'people' => $request->people,
            'message' => $request->message,
            'original_filename' => $originalFilename,
            'encrypted_filename' => $encryptedFilename,
        ]);
        // PesanModel::create($request->all());

        Session::flash('success', 'Pesanan berhasil ditambahkan.');
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $pageTitle = 'Reservasi Table';

    //     // RAW SQL QUERY
    //     $pesanan = collect(DB::select('
    //         SELECT *
    //         FROM booking
    //         WHERE id = ?
    //     ', [$id]))->first();

    //     return view('admin.show', compact('pageTitle', 'admin'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit($id)
    // {
    //     $pesanan = DB::table('pesanan')->where('id', $id)->first();

    //     // ...
    //     return view('admin.edit', compact('pesanan'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     $messages = [
    //         'required' => ':Attribute harus diisi.',
    //         'email' => 'Isi :attribute dengan format yang benar',
    //         'min' => ':Attribute minimal :min karakter'
    //     ];

    //     $validator = Validator::make($request->all(), [
    //         'nama' => 'required',
    //         'email' => 'required|email',
    //         'noTelp' => 'required|min:12',
    //         'pesanan' => 'required'
    //     ], $messages);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput($request->all());
    //     }

    //     DB::table('pesanan')
    //         ->where('id', $id)
    //         ->update([
    //             'nama' => $request->nama,
    //             'email' => $request->email,
    //             'noTelp' => $request->noTelp,
    //             'pesanan' => $request->pesanan
    //         ]);

    //     return redirect()->route('admin.index');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     // QUERY BUILDER
    //     DB::table('pesanan')
    //         ->where('id', $id)
    //         ->delete();

    //     return redirect()->route('admin.index');
    // }
}
