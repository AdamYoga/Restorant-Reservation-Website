<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_tablesModel;

class admin_tablesController extends Controller
{
    function index() {
        $kirim = admin_tablesModel::latest()->paginate();
        // return $kirim;
        return view('admin/tables', compact('kirim'));
    }


    public function create() {
    }

    public function store(Request $tangkap, admin_tablesModel $kirim) {
        $kirim->update([
            'role' => $tangkap->status_akun
        ]);

        return redirect()->route('admin_tables.index');

    }

    public function edit(Request $tangkap) {
    }

    public function update(Request $tangkap, admin_tablesModel $kirim) {
        // $kirim->update([
        //     'role' => $tangkap->status_akun
        // ]);

        // echo $tangkap->status_akun;

        // return $user;

        
        $user = admin_tablesModel::find($tangkap->id_akun);

        $apa = $tangkap->status_akun;
        $user->role = $apa;

        $user->save();

        return redirect()->route('admin_tables.index');
    }

    public function destroy() {

    } 
}
