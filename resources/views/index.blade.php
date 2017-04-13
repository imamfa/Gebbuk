@extends('main')
@section('title', 'GEBBUK - Drop Your Book, Inspire More')
@section('content')
  <div id="headerwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1>Sumbangkan Bukumu<br/>
          Kumpulkan Poinnya.</h1>
          <button type="submit" class="btn btn-warning btn-lg" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Daftar Sekarang!</button>
        </div><!-- /col-lg-6 -->
      <div class="col-lg-6">
          <img class="img-responsive" src="img/donasi_buku.png" alt="donasi_buku_vektor">
      </div><!-- /col-lg-6 -->

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /headerwrap -->

<section id="about">
<div class="container">
  <div class="row mt centered">
    <div class="col-lg-6 col-lg-offset-3">
      <h1>Berbagi Buku<br/> Jadi Menguntungkan.</h1>
      <h3>Dengan menyumbangkan buku bekas, kamu bisa mendapatkan poin yang nantinya bisa ditukarkan.</h3>
    </div>
  </div><!-- /row -->

  <div class="row mt centered">
    <div class="col-lg-4">
      <img src="img/ser01.png" width="180" alt="">
      <h4>1 - Donasikan Bukumu</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
    </div><!--/col-lg-4 -->

    <div class="col-lg-4">
      <img src="img/ser02.png" width="180" alt="">
      <h4>2 - Kumpulkan Poinnya</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>

    </div><!--/col-lg-4 -->

    <div class="col-lg-4">
      <img src="img/ser03.png" width="180" alt="">
      <h4>3 - Tukarkan Poinnya!</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>

    </div><!--/col-lg-4 -->
  </div><!-- /row -->
</div><!-- /container -->

</section>

<section id="fitur">
<div class="container">
  <div class="row mt centered">
    <div class="col-lg-6 col-lg-offset-3">
    <h1>Video Teaser.</h1>
    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</h3><br>
  </div><!-- /col-lg-4 -->

    <div class="col-lg-8 col-lg-offset-2 ">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uf7QxnnkPDc" allowfullscreen></iframe>
      </div>
    </div><!--/col-lg-8 -->

</div><! --/container -->
</section>

<section id="team">
<div class="container">
  <div class="row mt centered">
    <div class="col-lg-6 col-lg-offset-3">
      <h1>Our Awesome Team.</h1>
      <h3>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h3>
    </div>
  </div><!-- /row -->

  <div class="row mt centered">
    <div class="col-lg-4">
      <img class="img-circle" src="http://www.aamircheema.com/images/no_image.png" width="140" alt="">
      <h4>Megananda Septianto</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
      <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
    </div><!--/col-lg-4 -->

    <div class="col-lg-4">
      <img class="img-circle" src="http://www.aamircheema.com/images/no_image.png" width="140" alt="">
      <h4>Imam Fahrurrozi</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
      <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
    </div><!--/col-lg-4 -->

    <div class="col-lg-4">
      <img class="img-circle" src="http://www.aamircheema.com/images/no_image.png" width="140" alt="">
      <h4>Unsurna Mauris</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
      <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
    </div><!--/col-lg-4 -->
  </div><!-- /row -->
</div><!-- /container -->

@endsection
