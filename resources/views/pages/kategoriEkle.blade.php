@extends('layouts.app', ['page' => __('Urun'), 'pageSlug' => 'urun'])

@section('content')

<form action="{{Route('kategoriEkleSonuc')}}" method="post">
  @csrf
  <div style="float:left;padding-left:10px;padding-right:10px;">
  <label>Ürün Kategori:</label>
  </div>
  <div style="float:left">
    <input type="text" name="urun_kategori"></input></br></br>

  <input type="submit" name="ilet" value="Gönder">
    </div>
</form>





@endsection

@push('js')

@endpush
