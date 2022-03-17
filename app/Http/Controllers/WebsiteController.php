<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Urun;
use DB;

class WebsiteController extends Controller
{
    public function uruncagir(){
      $urunler=DB::table('Urun_kategori')
         ->leftJoin('Urun', 'Urun.urun_kategori', '=', 'Urun_kategori.urun_kategori_ad')
         ->whereNotNull('Urun.id')
         ->get();
      return view('website.pages.urunler',array('urunler'=>$urunler));

    }
    public function urunview($id){
      $urun= Urun::find($id);
      return view('website.pages.urunview',array('urun'=>$urun));
    }
    public function kategorikontrol($urun_kategori){
      $urunler=DB::table('Urun_kategori')
         ->leftJoin('Urun', 'Urun.urun_kategori', '=', 'Urun_kategori.urun_kategori_ad')
         ->whereNotNull('Urun.id')
         ->where('Urun.urun_kategori',$urun_kategori)
         ->get();
      return view('website.pages.kategori',array('urunler'=>$urunler),array('kategori'=>$urun_kategori));

      //$urun= DB::table('Urun')-where($urun_kategori,"Giyim")->get();
    //  $urun = DB::select('select * from Urun where urun_kategori="Giyim"');
      //return view('website.pages.giyim',array('urun'=>$urun));
    //  $urun= Urun::find($urun_kategori);
      //return view('website.pages.giyim',array('urunler'=>$urun));

    }
    public function index(){
      $urunler=DB::table('Urun_kategori')
         ->leftJoin('Urun', 'Urun.urun_kategori', '=', 'Urun_kategori.urun_kategori_ad')
         ->whereNotNull('Urun.id')
         ->get();
      return view('website.pages.index',array('urunler'=>$urunler));

    }
}
