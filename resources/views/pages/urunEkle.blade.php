@extends('layouts.app', ['page' => __('Urun'), 'pageSlug' => 'urun'])
@section('css')

@endsection
@section('content')

<form action="{{Route('urunEkleSonuc')}}" method="post">
  @csrf
  <div style="float:left;padding-left:10px;padding-right:10px;">
  <label>Ürün Adı:     </label></br></br>
  <label>Ürün Kategori:</label>
  </div>
  <div style="float:left">
    <input type="text" name="urun_ad"></input></br></br>
  <select id="kategori" name="urun_kategori">
    <?php foreach ($kategoris as $id => $kategori): ?>
        <option value="{{$kategori->urun_kategori_ad}}">{{$kategori->urun_kategori_ad}}</option>
    <?php endforeach; ?>
  </select></br></br>

  <input type="submit" name="ilet" value="Gönder">
    </div>
</form>






@endsection

@push('js')

@endpush
