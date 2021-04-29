<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
//    diisi jika nama tabel berbeda dengan nama model
//    protected $table = 'ujians';

//    diisi jika nama kolom yang menjadi primary key bukan id
//    protected $primaryKey = 'id';

// diisi jika menggunakan model mass assigment
    protected $fillable = ['nama_mk', 'dosen', 'jumlah_soal', 'keterangan'];
}
