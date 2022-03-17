@extends('layouts.app', ['page' => __('Urun'), 'pageSlug' => 'urun'])

@section('content')

<form action="{{Route('kategoriSilSonuc')}}" method="post">
  @csrf
  <div style="float:left;padding-left:10px;padding-right:10px;">
  <label>Ürün Kategori:</label>
  </div>
  <div style="float:left">
    <select id="kategori" name="urun_kategori">
      <?php foreach ($kategoris as $id => $kategori): ?>
          <option value="{{$kategori->urun_kategori_ad}}">{{$kategori->urun_kategori_ad}}</option>
      <?php endforeach; ?>
    </select></br></br></br></br>

  <input type="submit" name="ilet" value="Sil">
    </div>
</form>


@endsection

@push('js')

@endpush
