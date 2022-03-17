<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    use HasFactory;

    protected $table ='Urun';
    protected $fillable = ['urun_ad','urun_kategori','urun_gorsel','urun_text'];
}
