<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    // jika tidak mau memasukkan timestamp
    public $timestamps = false;

    protected $fillable = ['name', 'description', 'price', 'category_id'];
}
