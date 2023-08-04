<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $fillable = ['nama_menu', 'harga_menu', 'img', 'detail'];
    public $timestamps = false;
}
