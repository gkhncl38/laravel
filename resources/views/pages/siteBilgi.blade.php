@extends('layouts.app', ['page' => __('siteBilgi'), 'pageSlug' => 'siteBilgi'])

@section('content')

<form action="{{ url('admin/siteBilgiSonuc')}}" method="post">
  @csrf
  <div style="float:left;padding-left:10px;padding-right:10px;">
  <label>Adres:     </label></br></br>
  <label>Telefon:</label></br></br>
  <label>Email:</label></br></br>
  <label>Harita iframe Kodu:</label>

  </div>

  <div style="padding-left:10px;padding-right:10px;">

    <input type="text" name="adres" value="{{$site->adres}}"></input></br></br>
    <input type="text" name="telefon" value="{{$site->telefon}}"></input></br></br>
    <input type="text" name="email" value="{{$site->email}}"></input></br></br>
    <textarea name="iframe" value="{{$site->iframe}}" rows="5" cols="100">{{$site->iframe}}</textarea></br></br>
    <input type="submit" name="ilet" value="Gönder" style="width:100px;height:30px;background-color:#ba54f5;color:#ffffff;">
  </div>



</form>
@endsection
