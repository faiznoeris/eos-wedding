  <!DOCTYPE html>
  <html>
  <head>
    <title><?= $title ?></title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/materialize/css/materialize.min.css') ?>"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <style type="text/css">
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    .carousel .carousel-item {
      width: 350px !important;
      height: 350px !important;
    }



  </style>
</head>

<body>
  <header>

    <nav class="nav-extended teal">
      <div class="nav-wrapper">
        <a href="<?= base_url('') ?>" class="brand-logo center hide-on-small-only"><?= $title ?></a>
        <a href="<?= base_url('') ?>" class="brand-logo center hide-on-med-and-up"><img width="50" height="50" src="https://svn.apache.org/repos/asf/lucene.net/trunk/branding/logo/lucene-net-icon-512x256.png"></a>

      </div>
      <div class="nav-wrapper teal">
        <div class="col s12" style="margin-left: 10px;">
          <a href="<?= base_url('') ?>" class="breadcrumb">Home</a>
          <a href="<?= base_url('#layanan') ?>" class="breadcrumb">Layanan</a>
          <a href="<?= base_url('layanan/makeupwisuda') ?>" class="breadcrumb">Make Up Wisuda</a>
        </div>

      </nav>



    </header>

    <main> 
     <div class="fixed-action-btn">
      <a id="menu" class="btn-floating btn-large teal" href="<?= base_url('Ordering/addtocart/wisuda') ?>">
        <i class="large material-icons">add_shopping_cart</i>
      </a>
    </div>


    <!-- Tap Target Structure -->
    <div class="tap-target teal" data-target="menu">
      <div class="tap-target-content white-text">
        <h5>Order</h5>
        <p style="font-size: 11px;" class="hide-on-med-and-up">
          Anda dapat meng-order layanan make up wisuda kami dengan menekan tombol bergambar keranjang yang ada di bawah ini. 
          <br>Klik dimana saja untuk menghilangkan pesan ini.
        </p>

        <p class="hide-on-small-only">
          Anda dapat meng-order layanan make up wisuda kami dengan menekan tombol bergambar keranjang yang ada di bawah ini. 
          <br>Klik dimana saja untuk menghilangkan pesan ini.
        </p>
      </div>
    </div>

    <div class="container">

      <br>
      <h3 class="light center-align">MAKE UP WISUDA</h3>

      <div class="carousel">
        <a class="carousel-item" href="#one!"><img height="350" width="350" src="https://aleanasbridal.com/wp-content/uploads/2016/06/148545-283x424-beautiful-natural-bridal-makeup.jpg"></a>
        <a class="carousel-item" href="#two!"><img height="350" width="350" src="https://www.womangettingmarried.com/wp-content/uploads/2016/05/wedding-makeup-looks-classic-013.jpg"></a>
        <a class="carousel-item" href="#three!"><img height="350" width="350" src="https://www.bridalguide.com/sites/default/files/article-images/beauty-%26-fitness/makeup-%26-skincare/makeup-mistakes/wedding-makeup.jpg"></a>
        <a class="carousel-item" href="#four!"><img height="350" width="350" src="https://i.pinimg.com/originals/a1/7f/0f/a17f0f9258a517c5ee9ca45d7910901b.jpg"></a>
        <a class="carousel-item" href="#five!"><img height="350" width="350" src="http://www.jasminfrench.co.uk/wp-content/uploads/wedding-makeup-edinburgh.jpg"></a>
      </div>

      <br><br>
      <h5 class="light center-align" style="font-weight: 500">DESKRIPSI LAYANAN</h5>
      <br>

      <div class="row z-depth-2" style="padding: 10px 10px 10px 10px;">

       <p class="flow-text" style="font-size: 20px; padding: 15px 15px 15px 15px">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eleifend sem at sem accumsan, sed auctor orci semper. Donec imperdiet diam lorem, id suscipit ipsum interdum vitae. Etiam accumsan quis nisl non porttitor. Cras molestie tortor et scelerisque dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec et libero et diam rhoncus pretium. Duis ut dignissim odio. Suspendisse ut urna enim. Donec rutrum tristique orci, vitae pellentesque nisl accumsan nec.

        <br><br>
        Integer ac ex sed leo pharetra euismod. Nulla convallis scelerisque fringilla. Cras eget aliquet diam. Praesent ut nulla volutpat, egestas ipsum a, condimentum velit. Mauris quis nibh eget sem vehicula vehicula. Phasellus eleifend velit at ligula scelerisque viverra. Donec viverra erat sapien, vitae pulvinar ipsum condimentum vel. Morbi eleifend imperdiet felis molestie eleifend. Morbi sed lacus quis magna lobortis pretium. Donec nec imperdiet enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam et nibh vitae turpis ornare laoreet. Quisque et ipsum augue. In et est sed nisi mollis venenatis.
      </p>

    </div>

  </div>

  <br><br>

</main>


<footer class="page-footer teal darken-1">
  <div class="footer-copyright teal darken-1">
    <div class="container" style="margin-bottom: 15px;">
      © 2017 EOS - Salon
    </div>
  </div>
</footer>





<!--JavaScript at end of body for optimized loading-->


<script type="text/javascript" src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>

<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.min.js') ?>"></script>

<script type="text/javascript">
 $(document).ready(function(){
  $('.carousel').carousel();
  $('.tap-target').featureDiscovery();
  $('.tap-target').featureDiscovery('open');
});
</script>
</body>
</html>