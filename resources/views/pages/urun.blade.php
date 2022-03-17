@extends('layouts.app', ['page' => __('Urun'), 'pageSlug' => 'urun'])

@section('content')
    <div class="row">
        <div class="col-md-12">
          <div style="float:left;padding-left:5px;">
          <a href="/admin/urunEkle" ><i class="tim-icons icon-simple-add"></i> ÜRÜN EKLE</a>
          </div>
          <div style="float:left;padding-left:20px;">
          <a href="/admin/kategoriEkle" ><i class="tim-icons icon-simple-add"></i> KATEGORİ EKLE</a>
          </div>
          <div style="float:left;padding-left:20px;">
          <a href="/admin/kategoriSil" ><i class="tim-icons icon-simple-delete"></i> KATEGORİ SİL</a>
          </div>
          <div style="float:left;padding-left:20px;">
          <a href="/admin/kategoriDuzenle" ><i class="tim-icons icon-refresh-02"></i> KATEGORİ DÜZENLE</a>
          </div>
          <div style="float:left;padding-left:20px;">
          <form action="{{ url('admin/urunSirala')}}" method="post">
            @csrf
            <select name="urun_kategori">

            <option value="Urun.id">ID</option>
            <option value="urun_ad">ÜRÜN ADI</option>
            <option value="urun_kategori">ÜRÜN KATEGORİ</option>

            </select>
            <input type="submit" name="ilet" value="Sırala">


          </form>

        </div>
        <table class="table">
          <thead class="text-primary">
          <th>
            ID
          </th>
          <th>
            ÜRÜN ADI
          </th>
          <th>
            ÜRÜN KATEGORİ
          </th>
        </thead>
        <tbody>
          <?php foreach ($urunler as $key => $urun): ?>
              <tr>
              <td>
                  {{$urun->id}}
              </td>
              <td>
                  {{$urun->urun_ad}}
              </td>
              <td>
                {{$urun->urun_kategori}}
              </td>
            </td>

            <td>
              <a href="{{ url('admin/urunDetay', $urun->id) }}" ><i class="tim-icons icon-refresh-02"></i> DETAY</a>
            </td>
              <td>
                <a href="{{ url('admin/urunDuzenle', $urun->id) }}" ><i class="tim-icons icon-refresh-02"></i> DÜZENLE</a>
              </td>
              <td>
                <a href="{{ url('admin/urunSil', $urun->id) }}" > <i class="tim-icons icon-simple-delete"></i> SİL</a>

              </td>
            </tr>

          <?php endforeach; ?>

        </tbody>
        </table>

        </div>
    </div>
@endsection

@push('js')

@endpush
