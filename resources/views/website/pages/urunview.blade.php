@extends('website.layouts.pagesLayouts')
@section('css')
@endsection
@section('page-name')
{{$urun->urun_ad}}
@endsection
@section('page-adres1')
ÜRÜNLER
@endsection
@section('page-adres2')
{{$urun->urun_kategori}}
@endsection
@section('content')
<div class="container" style="height:300px;">
<div style="float:left;width:50%;height:300px;">
  <img src="{{url($urun-> urun_gorsel)}}" width="600px" height="300px" style="display:block; width:100%; margin:-10px 0;"/>
</div>
<div style="float:left;width:50%;height:300px;">
  <h2>{{$urun->urun_ad}}</h2>
  <h4>{{$urun->urun_kategori}}</h4>
  <p>{{$urun->urun_text}}</p>
</div>
<a href="/iletisim" class="btn btn-primary py-2 px-4">Bize Yazın</a>
</div>


@endsection
@section('js')
@endsection
