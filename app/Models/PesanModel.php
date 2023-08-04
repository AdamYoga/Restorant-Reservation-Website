<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanModel extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = ['name', 'email', 'phone', 'date', 'time', 'people', 'message'];
    public $timestamps = false;
}
