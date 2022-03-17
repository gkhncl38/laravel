@extends('layouts.app', ['page' => __('Urun'), 'pageSlug' => 'urun'])

@section('content')

<form action="{{ url('admin/urunDuzenleSonuc', $urun->id) }}" method="post">
  @csrf
  <div style="float:left;padding-left:10px;padding-right:10px;">
  <label>Ürün Adı:     </label></br></br>
  <label>Ürün Kategori:</label>
  </div>
  <div style="float:left">
    <input type="text" name="urun_ad" value="{{$urun->urun_ad}}"></input></br></br>
  <select id="kategori" name="urun_kategori" value="{{$urun->urun_kategori_ad}}">
    <?php foreach ($kategoris as $id => $kategori): ?>
      <?php if($kategori->urun_kategori_ad==$urun->urun_kategori){?>
        <option value="{{$kategori->urun_kategori_ad}}" selected>{{$kategori->urun_kategori_ad}}</option>
      <?php }  else{ ?>
        <option value="{{$kategori->urun_kategori_ad}}">{{$kategori->urun_kategori_ad}}</option>
      <?php } ?>
    <?php endforeach; ?>
  </select></br></br>

  <input type="submit" name="ilet" value="Gönder">
    </div>

</form>



@endsection

@push('js')

@endpush
