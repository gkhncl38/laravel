@extends('layouts.app', ['page' => __('Urun'), 'pageSlug' => 'urun'])

@section('content')

<form action="{{Route('kategoriDuzenleSonuc')}}" method="post">
  @csrf
  <select id="kategori" name="urun_kategori" onchange="myFunction(event)">
    <?php foreach ($kategoris as $id => $kategori): ?>
        <option value="{{$kategori->urun_kategori_ad}}">{{$kategori->urun_kategori_ad}}</option>
    <?php endforeach; ?>
  </select>
      <input id="myText" name="text" type="text" value=""></br></br>
        <input type="submit" name="ilet" value="Gönder">
</form>
@endsection
@push('js')
<script>function myFunction(e) {
    document.getElementById("myText").value = e.target.value
}</script>
@endpush
