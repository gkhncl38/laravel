<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urun_kategori extends Model
{
    use HasFactory;

    protected $table ='Urun_kategori';
    protected $fillable = ['urun_kategori_ad'];
}
