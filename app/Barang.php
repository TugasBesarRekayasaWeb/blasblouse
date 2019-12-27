<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{

    protected $table = 'products';
    
    protected $fillable = ['nama','harga','detail','S','M','L','XL','XXL','Gambar','gambarModel','gambarPosisi','gambarDetail'];
    
}
