<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_dashboardModel extends Model
{
    protected $table = 'pemesanan';
    protected $fillable = ['nama', 'telepon', 'alamat', 'catatan', 'bukti_bayar', 'list_pesanan', 'list_jumlah_pesanan', 'list_harga_setiap_item', 'total_bayar'];

}
