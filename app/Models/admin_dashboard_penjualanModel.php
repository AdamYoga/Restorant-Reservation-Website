<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_dashboard_penjualanModel extends Model
{
    use HasFactory;
    protected $table = 'penjualan';
    protected $fillable = ['hari', 'banyak_penjualan'];
}
