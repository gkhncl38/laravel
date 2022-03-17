@extends('layouts.app', ['page' => __('Urun'), 'pageSlug' => 'urun'])

@section('content')

<form action="{{ url('admin/urunDetaySonuc', $urunler->id) }}" method="post">
  @csrf
  <div style="float:left;padding-left:10px;padding-right:10px;">
  <label>Ürün Adı:     </label></br></br>
  <label>Ürün Görsel Linki:</label></br></br>
  <label>Ürün Görseli:</label>

  </div>

  <div style="float:left;padding-left:10px;padding-right:10px;">

    <input type="text" name="urun_ad" value="{{$urunler->urun_ad}}"></input></br></br>
    <input type="text" name="urun_gorsel" value="{{$urunler->urun_gorsel}}"></input></br></br>
    <input type="image" src="{{url($urunler->urun_gorsel)}}" alt="Submit" width="300" height="300">

  </div>

    <div style="padding-left:10px;padding-right:10px;">
      <label>Ürün Hakkında:     </label></br></br>
      <textarea id="urun_text" name="urun_text" rows="10" cols="50">{{$urunler->urun_text}}</textarea>

    </div>
    <div style="padding:10px;">
      <input type="submit" name="ilet" value="Gönder">
    </div>

</form>



@endsection

@push('js')

@endpush
