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

    .tabs .indicator {
      background-color: #006064;
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
      <div class="nav-content">
        <ul class="tabs tabs-transparent">
          <li class="tab"><a class="active" href="#galeri" >Galeri</a></li>
          <li class="tab"><a href="#layanan">Layanan</a></li>
          <li class="tab"><a href="#kontak">Kontak Kami</a></li>
          <li class="tab"><a href="#tentang">Tentang Kami</a></li>
        </ul>
      </div>
    </nav>
    


  </header>

  <main> 
    <div id="galeri" class="col s12">      
      <br><br>
      <h3 class="light center-align">G A L E R I</h3>
      <br>
      <div class="container">
        <div class="row center-align"> 
          <div class="col s12">
            <ul class="tabs tabs-fixed-width teal darken-1 z-depth-2">
              <li class="tab col s3"><a class="active" href="#foto">Foto</a></li>
              <li class="tab col s3"><a href="#video">Video</a></li>
            </ul>
          </div>
        </div>

        <div class="row">

          <div id="foto" class="col s12">

            <?php foreach ($data_foto as $foto): ?>
              <div class="col s12 m4">
                <div class="card hoverable">
                  <div class="card-image">
                    <img class="materialboxed responsive-img" src="<?= $foto->pathGalery ?>">
                    <span class="card-title"><?= $foto->namaGalery ?></span>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>


          </div>

          <div id="video" class="col s12">

            <?php foreach ($data_video as $video): ?>
              <div class="col s12 m4 hoverable" style="padding: 5px 5px 5px 5px;">
                <video class="responsive-video" controls style="height: 220px;">
                  <source src="<?= $video->pathGalery ?>" type="video/mp4">
                  </video>
                </div>
              <?php endforeach; ?>             

            </div>
          </div>

        </div>
      </div>

      <br><br>

    </div>
    <div id="layanan" class="col s12">


      <h3 class="light center-align">L A Y A N A N</h3>
      <br>

      <div class="container">

        <div class="row">
          <a href="<?= base_url('layanan/makeupwedding') ?>">
            <div class="col s12 m6">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="http://makeupideastips.com/wp-content/uploads/2016/12/wedding-makeup-ideas-looking-best.jpg" height="250">

                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4 center-align">Make Up Wedding</span>
                </div>
              </div>
            </div>
          </a>


          <a href="<?= base_url('layanan/makeuppesta') ?>">
            <div class="col s12 m6">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="http://learn.homework.pk/wp-content/uploads/2017/09/party-makeup-bootcamp.jpg" height="250">

                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4 center-align">Make Up Pesta</span>

                </div>
              </div>
            </div>
          </a>

        </div>


        <div class="row">
          <a href="<?= base_url('layanan/makeuppengantin') ?>">
            <div class="col s12 m6">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="http://www.cocobellabride.com/wp-content/uploads/2017/01/wedding-hair-and-makeup-trial.jpg" height="250">

                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4 center-align">Make Up Pengantin</span>
                </div>
              </div>
            </div>
          </a>


          <a href="<?= base_url('layanan/makeupwisuda') ?>">
            <div class="col s12 m6">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="https://cdn2.hercampus.com/graduation_9.jpg" height="250">

                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4 center-align">Make Up Wisuda</span>
                </div>
              </div>
            </div>
          </a>

        </div>

      </div>

      <br><br>
    </div>
    <div id="kontak" class="col s12">
      <br>


      <div class="container s12">

        <div class="row z-depth-2" style="padding: 10px 10px 10px 10px">
          <h3 class="light center-align hide-on-small-only">K O N T A K&emsp;K A M I</h3>
          <h4 class="light center-align hide-on-med-and-up">K O N T A K&emsp;K A M I</h4>
          <br>
          <form method="post" action="<?php echo base_url('Kontak/submitmessage/');?>">

            <div class="col s12 offset-l3 offset-m3">

              <div class="row">
               <div class="input-field col s12 m6">
                <i class="material-icons prefix">account_circle</i>
                <input id="nama" type="text" class="validate" name="nama" required>
                <label for="nama">Nama</label>
              </div>
            </div>

            <div class="row">
             <div class="input-field col s12 m6">
              <i class="material-icons prefix">email</i>
              <input id="email" type="email" class="validate" name="email" required>
              <label for="email">Email</label>
            </div>
          </div>

          <div class="row">
           <div class="input-field col s12 m6">
            <i class="material-icons prefix">phone</i>
            <input id="nomorhp" type="tel" class="validate" name="nomorhp" required>
            <label for="nomorhp">Nomor HP</label>
          </div>
        </div>

        <div class="row">
         <div class="input-field col s12 m6">
          <i class="material-icons prefix">mode_edit</i>
          <input id="judulpesan" type="text" class="validate" name="judulpesan" required>
          <label for="judulpesan">Judul Pesan</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12 m6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="textarea1" class="materialize-textarea" data-length="120" name="pesan" required></textarea>
          <label for="textarea1">Pesan</label>
        </div>
      </div>

    </div>

    <div class="row center-align">
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
      </button>
    </div>
  </form>
</div>                       


</div>

<br><br>

</div>
<div id="tentang" class="col s12">

  <h3 class="light center-align hide-on-small-only">T E N T A N G&emsp;K A M I</h3>
  <h4 class="light center-align hide-on-med-and-up">T E N T A N G&emsp;K A M I</h4>
  <br>

  <div class="container">

    <div class="row z-depth-2" style="padding: 15px 15px 15px 15px"> 

      <h5 class="light center-align" style="font-weight: 500">BIODATA</h5>
      <hr style="width: 75%" />
      <p class="flow-text" style="font-size: 20px; padding: 15px 15px 15px 15px">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eleifend sem at sem accumsan, sed auctor orci semper. Donec imperdiet diam lorem, id suscipit ipsum interdum vitae. Etiam accumsan quis nisl non porttitor. Cras molestie tortor et scelerisque dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec et libero et diam rhoncus pretium. Duis ut dignissim odio. Suspendisse ut urna enim. Donec rutrum tristique orci, vitae pellentesque nisl accumsan nec.

        <br><br>
        Integer ac ex sed leo pharetra euismod. Nulla convallis scelerisque fringilla. Cras eget aliquet diam. Praesent ut nulla volutpat, egestas ipsum a, condimentum velit. Mauris quis nibh eget sem vehicula vehicula. Phasellus eleifend velit at ligula scelerisque viverra. Donec viverra erat sapien, vitae pulvinar ipsum condimentum vel. Morbi eleifend imperdiet felis molestie eleifend. Morbi sed lacus quis magna lobortis pretium. Donec nec imperdiet enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam et nibh vitae turpis ornare laoreet. Quisque et ipsum augue. In et est sed nisi mollis venenatis.
      </p>
      <br>
      <h5 class="light center-align" style="font-weight: 500">SYARAT & KETENTUAN</h5>
      <hr style="width: 75%" />
      <p class="flow-text" style="font-size: 20px; padding: 15px 15px 15px 15px">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eleifend sem at sem accumsan, sed auctor orci semper. Donec imperdiet diam lorem, id suscipit ipsum interdum vitae. Etiam accumsan quis nisl non porttitor. Cras molestie tortor et scelerisque dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec et libero et diam rhoncus pretium. Duis ut dignissim odio. Suspendisse ut urna enim. Donec rutrum tristique orci, vitae pellentesque nisl accumsan nec.
        <br><br>
        Integer ac ex sed leo pharetra euismod. Nulla convallis scelerisque fringilla. Cras eget aliquet diam. Praesent ut nulla volutpat, egestas ipsum a, condimentum velit. Mauris quis nibh eget sem vehicula vehicula. Phasellus eleifend velit at ligula scelerisque viverra. Donec viverra erat sapien, vitae pulvinar ipsum condimentum vel. Morbi eleifend imperdiet felis molestie eleifend. Morbi sed lacus quis magna lobortis pretium. Donec nec imperdiet enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam et nibh vitae turpis ornare laoreet. Quisque et ipsum augue. In et est sed nisi mollis venenatis.
      </p>

    </div>

  </div>

  <br><br>
</div>

</main>


<footer class="page-footer teal darken-1">
  <div class="footer-copyright teal darken-1">
    <div class="container" style="margin-bottom: 15px;">
      © 2017 EOS - Wedding
    </div>
  </div>
</footer>





<!--JavaScript at end of body for optimized loading-->


<script type="text/javascript" src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>

<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.min.js') ?>"></script>

<script type="text/javascript">
 $(document).ready(function(){
  $('.tabs').tabs();
  $('.parallax').parallax();
  $('.materialboxed').materialbox();
  $(".tabs>li>a").css("color", '#FFF');
  $('textarea#textarea1').characterCounter();
});
</script>
</body>
</html>