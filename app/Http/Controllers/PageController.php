<?php

namespace App\Http\Controllers;

use App\Models\SiteBilgi;
use App\Models\Urun;
use App\Models\Urun_kategori;
use Illuminate\Http\Request;
use DB;



class PageController extends Controller
{

    /**
     * Display icons page
     *
     * @return \Illuminate\View\View
     */
    public function icons()
    {
        return view('pages.icons');
    }

    /**
     * Display maps page
     *
     * @return \Illuminate\View\View
     */
    public function maps()
    {
        return view('pages.maps');
    }

    /**
     * Display tables page
     *
     * @return \Illuminate\View\View
     */
    public function tables()
    {
        return view('pages.tables');
    }

    /**
     * Display notifications page
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {
        return view('pages.notifications');
    }

    /**
     * Display rtl page
     *
     * @return \Illuminate\View\View
     */
    public function rtl()
    {
        return view('pages.rtl');
    }

    /**
     * Display typography page
     *
     * @return \Illuminate\View\View
     */
    /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function upgrade()
    {
        return view('pages.upgrade');
    }

    // URUN SAYFASI
    public function urun(){
      $urunler=DB::table('Urun_kategori')
         ->leftJoin('Urun', 'Urun.urun_kategori', '=', 'Urun_kategori.urun_kategori_ad')
         ->whereNotNull('Urun.id')
         ->get();
      return view('pages.urun',array('urunler'=>$urunler));
     /* $urun = DB::select('select * from urun');
      return view('pages.urun',compact(urun,$urun));*/
    }
    public function urunSirala(Request $request){
      $order=$request->urun_kategori;

        $urunler=DB::table('Urun_kategori')
         ->leftJoin('Urun', 'Urun.urun_kategori', '=', 'Urun_kategori.urun_kategori_ad')
         ->whereNotNull('Urun.id')
         ->orderBy($order)
         ->get();

      return view('pages.urun',array('urunler'=>$urunler));
    }

    // URUN KONTROL
    public function urunEkle(){
      $kategoris=Urun_kategori::all();
      return view('pages.urunEkle',array('kategoris'=>$kategoris));
    }
    public function urunEkleSonuc(Request $request){
    if($request->urun_ad != "" && $request->urun_kategori != "")
    {
      DB::table("urun")->insert([

        "urun_ad"=>$request->urun_ad ,
        "urun_kategori"=>$request->urun_kategori
      ]);
      echo "Ekleme Başarılı";
      $urunler=DB::table('Urun_kategori')
         ->leftJoin('Urun', 'Urun.urun_kategori', '=', 'Urun_kategori.urun_kategori_ad')
         ->whereNotNull('Urun.id')
         ->get();
      return view('pages.urun',array('urunler'=>$urunler));
    }
    elseif($request->urun_ad != "" && $request->urun_kategori == "")
    {
      DB::table("urun")->insert([

        "urun_ad"=>$request->urun_ad
      ]);
      echo "Ekleme Başarılı";
      $uruns= Urun::all();
      return view('pages.urun',array('uruns'=>$uruns));
    }
    else{
      echo "Ekleme Başarısız";
      $uruns= Urun::all();
      return view('pages.urun',array('uruns'=>$uruns));
    }
    }

    public function urunSil($id){

      DB::table("urun")->where("id",$id)->delete();

      echo "Silme Başarılı";
      $urunler=DB::table('Urun_kategori')
         ->leftJoin('Urun', 'Urun.urun_kategori', '=', 'Urun_kategori.urun_kategori_ad')
         ->whereNotNull('Urun.id')
         ->get();
      return view('pages.urun',array('urunler'=>$urunler));
    }

    public function urunDuzenle($id){
      $kategoris=Urun_kategori::all();
      $urun= Urun::find($id);
      return view('pages.urunDuzenle',array('urun'=>$urun),array('kategoris'=>$kategoris));
    }
    public function urunDuzenleSonuc(Request $request,$id){
      DB::table("urun")->where("id",$id)->update([
        "urun_ad"=>$request->urun_ad,
        "urun_kategori"=>$request->urun_kategori
      ]);
      echo "Düzenleme Başarılı";
      $urunler=DB::table('Urun_kategori')
         ->leftJoin('Urun', 'Urun.urun_kategori', '=', 'Urun_kategori.urun_kategori_ad')
         ->whereNotNull('Urun.id')
         ->get();
      return view('pages.urun',array('urunler'=>$urunler));
    }

    public function urunDetay($id){
      $urunler = Urun::find($id);
      return view('pages.urunDetay',array('urunler'=>$urunler));
    }
    public function urunDetaySonuc(Request $request,$id){

      DB::table("urun")->where("id",$id)->update([
        "urun_ad"=>$request->urun_ad,
        "urun_gorsel"=>$request->urun_gorsel,
        "urun_text"=>$request->urun_text
      ]);
      echo "Detay Düzenlendi";
      $urunler=DB::table('Urun_kategori')
      ->leftJoin('Urun','Urun.urun_kategori','=','Urun_kategori.urun_kategori_ad')
      ->whereNotNull('Urun.id')
      ->get();
      return view('pages.urun',array('urunler'=>$urunler));
    }



    // KATEGORİ KONTROL
    public function kategoriEkle(){
      return view('pages.kategoriEkle');
    }
    public function kategoriEkleSonuc(Request $request){
    if($request->urun_kategori != "")
    {
      DB::table("Urun_kategori")->insert([

        "urun_kategori_ad"=>$request->urun_kategori
      ]);
      echo "Kategori Ekleme Başarılı";

      $urunler=DB::table('Urun_kategori')
         ->leftJoin('Urun', 'Urun.urun_kategori', '=', 'Urun_kategori.urun_kategori_ad')
         ->whereNotNull('Urun.id')
         ->get();
      return view('pages.urun',array('urunler'=>$urunler));

    }
    else{
      echo "Kategori Ekleme Başarısız";
      $urunler=DB::table('Urun_kategori')
         ->leftJoin('Urun', 'Urun.urun_kategori', '=', 'Urun_kategori.urun_kategori_ad')
         ->whereNotNull('Urun.id')
         ->get();
      return view('pages.urun',array('urunler'=>$urunler));
    }
    }

    public function kategoriSil(){
      $kategoris=Urun_kategori::all();
      return view('pages.kategoriSil',array('kategoris'=>$kategoris));
    }
    public function kategoriSilSonuc(Request $request){
        $kategori=$request->urun_kategori;
        $genelKontrol=DB::table("Urun_kategori")->where("urun_kategori_ad","Genel")->get();
        if($genelKontrol->urun_kategori_ad=!"Genel"){
          DB::table("Urun")->where("urun_kategori",$kategori)->update([
            "urun_kategori"=>"Genel"
          ]);
          DB::table("Urun_kategori")->insert([

            "urun_kategori_ad"=>"Genel"
          ]);
        }
        else{

          DB::table("Urun")->where("urun_kategori",$kategori)->update([
            "urun_kategori"=>"Genel"
          ]);
        }

          DB::table("Urun_kategori")->where("urun_kategori_ad",$kategori)->delete();

      echo "Kategori Silme Başarılı";
      $urunler=DB::table('Urun_kategori')
         ->leftJoin('Urun', 'Urun.urun_kategori', '=', 'Urun_kategori.urun_kategori_ad')
         ->whereNotNull('Urun.id')
         ->get();
      return view('pages.urun',array('urunler'=>$urunler));
    }


    public function kategoriDuzenle(){
      $kategoris=Urun_kategori::all();
      return view('pages.kategoriDuzenle',array('kategoris'=>$kategoris));
    }
    public function kategoriDuzenleSonuc(Request $request){
      $kategori=$request->urun_kategori;
      $new_kategori=$request->text;

      DB::table('Urun_kategori')->where('urun_kategori_ad',$kategori)->update([
        'urun_kategori_ad'=>$new_kategori
      ]);

        DB::table('Urun')->where('urun_kategori',$kategori)->update([
          'urun_kategori'=>$new_kategori
        ]);

        $urunler=DB::table('Urun_kategori')
         ->leftJoin('Urun', 'Urun.urun_kategori', '=', 'Urun_kategori.urun_kategori_ad')
         ->whereNotNull('Urun.id')
         ->get();
      return view('pages.urun',array('urunler'=>$urunler));
    }
    public function siteBilgi(){
      $id=1;
      $site=SiteBilgi::find($id);
      return view('pages.siteBilgi',array('site'=>$site));
    }
    public function siteBilgiSonuc(Request $request){
      $id=1;
      SiteBilgi::where("id",$id)->update([
        "adres"=>$request->adres,
        "telefon"=>$request->telefon,
        "email"=>$request->email,
        "iframe"=>$request->iframe
      ]);
      $id=1;
      $site=SiteBilgi::find($id);
      return view('pages.siteBilgi',array('site'=>$site));
    }

}
