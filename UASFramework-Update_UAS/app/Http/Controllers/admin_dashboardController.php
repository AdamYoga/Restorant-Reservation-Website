<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_dashboardModel;
use App\Models\admin_dashboard_menuModel;
use App\Models\admin_dashboard_penjualanModel;
use Ramsey\Uuid\Type\Integer;

class admin_dashboardController extends Controller
{
    function index() {
        $kirim = admin_dashboard_menuModel::paginate();
        $kirim_juga = admin_dashboard_penjualanModel::paginate();
        // return $kirim;

        return view('admin/oke', compact('kirim', 'kirim_juga'));
    }

    public function create()
    {
    }

    public function store(Request $tangkap)
    {
        // dibawah ini adalah kodingan form (termasuk upload file)
        
        $cari_hari_pada_model_penjualan = admin_dashboard_penjualanModel::where('hari', $tangkap->hari)->get(); 
        foreach ($cari_hari_pada_model_penjualan as $lihat) {
            $item_perlu_ditotal = $lihat->banyak_penjualan;
            $id = $lihat->id;
        }
        $item_perlu_ditotal ++;
        $masukkan_ke_database = admin_dashboard_penjualanModel::find($id);

        $masukkan_ke_database->banyak_penjualan = $item_perlu_ditotal;

        $masukkan_ke_database->save();


        $file = $tangkap->file('bukti_bayar');
        $nama_file = $file->getClientOriginalName();
        $kirim = New admin_dashboardModel;

        $kirim->nama = $tangkap->nama;
        $kirim->telepon = $tangkap->no_telepon;
        $kirim->alamat = $tangkap->alamat;
        $kirim->catatan = $tangkap->catatan;
        $kirim->bukti_bayar = $nama_file;
        

        

        // dibawah ini adalah kodingan order menu

        $list_pesanan = [];
        $list_jumlah_pesanan = [];
        $list_serta_total_harga = [];
        $iterasi = 1;
        $total_item = $tangkap->jumlah_item;
        while ($iterasi < $total_item + 1) {
            
            $pencarian_jumlah_pesanan = 'item'.$iterasi;
            $pencarian_nama_menu = 'nama_menu'.$iterasi;
            $pencarian_harga_menu = 'harga_menu'.$iterasi;
            // echo $tangkap->$pencarian_jumlah_pesanan.'<br>';

            if (!empty($tangkap->$pencarian_jumlah_pesanan)) {
                // echo $tangkap->$pencarian_jumlah_pesanan . '<br>';

                // echo 'ini adalah jumlah pesanannya = '.$tangkap->$pencarian_jumlah_pesanan.'<br>';
                // echo 'ini adalah harga menu yang dipilih = ' . $tangkap->$pencarian_harga_menu.'<br>';
                // echo 'pada iterasi ke = '.$iterasi.'<br><br>';

                $list_serta_total_harga[] = intval($tangkap->$pencarian_jumlah_pesanan) * intval($tangkap->$pencarian_harga_menu);
                
                
                $list_pesanan[] = $tangkap->$pencarian_nama_menu;
                $list_jumlah_pesanan[] = $tangkap->$pencarian_jumlah_pesanan;

            }
            // elseif (empty($tangkap->$pencarian_jumlah_pesanan)) {
            //     echo 'pembeli tidak memesan menu ini <br>';
            // }

            $iterasi++;
        }
        $konversi_array_list_pesanan = implode(", ", $list_pesanan);
        $konversi_array_list_jumlah_pesanan = implode(", ", $list_jumlah_pesanan);
        $konversi_array_list_serta_total_harga = implode(", ", $list_serta_total_harga);
        $total_yang_harus_dibayar = array_sum($list_serta_total_harga);
        
        
        // echo $konversi_array_list_pesanan.'<br>';
        // echo $konversi_array_list_jumlah_pesanan . '<br>';
        // echo $konversi_array_list_serta_total_harga . '<br>';
        // echo $total_yang_harus_dibayar . '<br>';

        // if (is_int($list_serta_total_harga[1])) {
        //     echo 'iya ini adalah tipe data integer';
        // }

        $kirim->list_pesanan = $konversi_array_list_pesanan;
        $kirim->list_jumlah_pesanan = $konversi_array_list_jumlah_pesanan;
        $kirim->list_harga_setiap_item = $konversi_array_list_serta_total_harga;
        $kirim->total_bayar = $total_yang_harus_dibayar;


        $kirim->save();


        $file->storeAs('public/UploadDisini', $file->getClientOriginalName());
        // // return $file;

        return redirect()->route('admin_dashboard.index');
    }

    public function edit(Request $tangkap)
    {
    }

    public function update(Request $tangkap, admin_dashboardModel $kirim)
    {
        // $kirim->update([
        //     'role' => $tangkap->status_akun
        // ]);

        // echo $tangkap->status_akun;

        // return $user;


        $user = admin_dashboardModel::find($tangkap->id_akun);

        $apa = $tangkap->status_akun;
        $user->role = $apa;

        $user->save();

        return redirect()->route('admin_tables.index');
    }

    public function destroy()
    {
    } 

}
