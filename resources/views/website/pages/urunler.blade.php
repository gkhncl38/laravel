@extends('website.layouts.pagesLayouts')
@section('css')
@endsection
@section('page-name')
Ürünler
@endsection
@section('page-adres1')
SAYFALAR
@endsection
@section('page-adres2')
ÜRÜNLER
@endsection
@section('content')

<div class="container">
    <?php foreach ($urunler as $key => $urun): ?>
        <div style="float:left;width:33%;">
          <div style="height:max-height: 320px;padding-bottom:10px;">
            <img src="{{url($urun->urun_gorsel)}}" width="95%" height="auto"/>
            <h2>{{$urun->urun_ad}}</h2>
            <h4>{{$urun->urun_kategori}}</h4>
            <p>{{$urun->urun_text}}</p>
            <a href="{{ url('urunview', $urun->id) }}" class="btn btn-primary py-2 px-4">Devamını Oku</a>
          </div>
        </div>
    <?php endforeach; ?>
    <div style="width:33%;">
      <div style="height:max-height: 300px;">
        <h3>Ürün Detayı için tıklayınız...</h3>
      </div>
    </div>
</div>


@endsection
@section('js')
<script>function truncateText(selector, maxLength) {
    var element = document.querySelector(selector),
        truncated = element.innerText;

    if (truncated.length > maxLength) {
        truncated = truncated.substr(0,maxLength) + '...';
    }
    return truncated;
}

document.querySelector('p').innerText = truncateText('p', 25);</script>
@endsection
