<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fas fa-igloo me-3"></i>TEST</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">

            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="/urunler" class="nav-item nav-link">ÜRÜNLER</a>

            <!--<a href="/kategori/Giyim" class="nav-item nav-link">GİYİM</a>
            <a href="/kategori/Gıda" class="nav-item nav-link">GIDA</a>
            <a href="/kategori/Dekorasyon" class="nav-item nav-link">DEKORASYON</a>-->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">KATEGORİLER</a>
                <div class="dropdown-menu m-0">
                  <?php      $urunler=DB::table('Urun_kategori')->get();
                  foreach ($urunler as $key => $urun): ?>
                  <a href="/kategori/{{$urun->urun_kategori_ad}}" class="dropdown-item">{{$urun->urun_kategori_ad}}</a>
                  <?php endforeach; ?>

                </div>
            </div>
            <a href="/iletisim" class="nav-item nav-link">İLETİŞİM</a>
        </div>
        <!--<a href="" class="btn btn-primary py-2 px-4">Book A Table</a>-->
    </div>
</nav>
