@extends('website.layouts.pagesLayouts')
@section('css')
@endsection
@section('page-name')
İletişim
@endsection
@section('page-adres1')
SAYFALAR
@endsection
@section('page-adres2')
İLETİŞİM
@endsection
@section('content')
<div class="container" style="margin-bottom:30px;">
  <div style="width:50%;float:left;">
    <div class="content">
       <div class="row">
         <div class="col-md-12">
           <div class="card card-user">
             <div class="card-header">
               <h5 class="card-title">İletişim Forumu</h5>
             </div>
            <div class="card-body">
               @if(Session::has('success'))
                  <div class="alert alert-success">
            	    {{ Session::get('success') }}
                   </div>
               @endif

              <form method="post" action="contact-us">
                 {{csrf_field()}}
                 <div class="row">
                   <div class="col-md-12">
                     <div class="form-group">
                       <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Adınız" name="name">
                       @error('name')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                     </div>
                   </div>
                 <div class="col-md-12">
                   <div class="form-group">

                       <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                       @error('email')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                     </div>
                   </div>
                 <div class="col-md-12">
                    <div class="form-group">

                       <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Numaranız" name="phone_number">
                       @error('phone_number')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                     </div>
                   </div>
                  <div class="col-md-12">
                     <div class="form-group">

                       <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Konu" name="subject">
                       @error('subject')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                     </div>
                   </div>
                  <div class="col-md-12">
                    <div class="form-group">

                       <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Mesajınız" name="message"></textarea>
                       @error('message')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                     </div>
                   </div>
                 </div>
                 <div class="row">
                  <div class="update ml-auto mr-auto">
                     <button type="submit" class="btn btn-primary btn-round">GÖNDER</button>
                   </div>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
    </div>
    </div>
    <div style="width:50%;float:left;">
      <div style="width:100%;height:50px;">

      </div>
      <h2>İletişim Bilgileri</h2><br>
      <div style="width:30%;float:left;">&nbsp;</div>
      <div style="width:70%;float:left;text-align:left;color:#ffaa00;">
        <strong><i class="fa fa-map-marker" aria-hidden="true"></i></strong>  {{$site->adres}}<br>
        <strong><i class="fa fa-phone" aria-hidden="true"></i></strong>  {{$site->telefon}}<br>
        <strong><i class="fa fa-envelope" aria-hidden="true"></i></strong>  {{$site->email}}
      </div>
    </div>
  </div>
  <div class="" style="width:100%;height:30px;float:left;">
  </div>
    <div>

      <?php echo   $site->iframe;?>
        </div>

@endsection
@section('js')
@endsection
