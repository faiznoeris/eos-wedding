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

    .btn-edge {
      /*position: absolute;*/
      right: -10px;
      top: -5px;

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
          <a href="<?= base_url('order') ?>" class="breadcrumb">Order</a>
        </div>

      </nav>

    </header>

    <main> 

      <br>

      <h3 class="light center-align">Order</h3>

      <br>

      <div class="container">

        <div class="row z-depth-2" style="padding: 10px 10px 10px 10px;">
          <?php if($this->cart->total_items() > 0): ?>
            <div class="row">
              <?php foreach ($this->cart->contents() as $items): ?>
                
                <div class="col s12 m6 l3" style="position: relative;">
                  <a href="<?= base_url('Ordering/removeitem/'.$items['rowid']) ?>" class="btn-floating btn-edge waves-effect waves-light teal right"><i class="material-icons">close</i></a>
                  <div class="card-panel grey lighten-5 z-depth-1">
                    <br>
                    <center>
                      <div class="row">
                        <img src="http://next.materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img">
                      </div>
                      <div class="row">
                        <span class="black-text">
                          <?php echo $items['name']; ?>
                          <br><br>
                          <i>Rp. <?php echo number_format($items['price'], 0, ',', '.'); ?></i>
                        </span>
                      </div>
                    </center>
                  </div>
                </div>
                
              <?php endforeach; ?>
            </div>

<!--           <div class="row">
            <div class="col s12 m6 l3" style="position: relative;">
              <a class="btn-floating btn-edge waves-effect waves-light teal right"><i class="material-icons">close</i></a>
              <div class="card-panel grey lighten-5 z-depth-1">
                <br>
                <center>
                  <div class="row">
                    <img src="http://next.materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img">
                  </div>
                  <div class="row">
                    <span class="black-text">
                      Make Up Wedding.
                      <br><br>
                      <i>Rp. 5.000.000</i>
                    </span>
                  </div>
                </center>
              </div>
            </div>

            <div class="col s12 m6 l3" style="position: relative;">
              <a class="btn-floating btn-edge waves-effect waves-light teal right"><i class="material-icons">close</i></a>
              <div class="card-panel grey lighten-5 z-depth-1">
                <br>
                <center>
                  <div class="row">
                    <img src="http://next.materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img">
                  </div>
                  <div class="row">
                    <span class="black-text">
                      Make Up Wedding.
                      <br><br>
                      <i>Rp. 5.000.000</i>
                    </span>
                  </div>
                </center>
              </div>
            </div>

            <div class="col s12 m6 l3" style="position: relative;">
              <a class="btn-floating btn-edge waves-effect waves-light teal right"><i class="material-icons">close</i></a>
              <div class="card-panel grey lighten-5 z-depth-1">
                <br>
                <center>
                  <div class="row">
                    <img src="http://next.materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img">
                  </div>
                  <div class="row">
                    <span class="black-text">
                      Make Up Wedding.
                      <br><br>
                      <i>Rp. 5.000.000</i>
                    </span>
                  </div>
                </center>
              </div>
            </div>

            <div class="col s12 m6 l3" style="position: relative;">
              <a class="btn-floating btn-edge waves-effect waves-light teal right"><i class="material-icons">close</i></a>
              <div class="card-panel grey lighten-5 z-depth-1">
                <br>
                <center>
                  <div class="row">
                    <img src="http://next.materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img">
                  </div>
                  <div class="row">
                    <span class="black-text">
                      Make Up Wedding.
                      <br><br>
                      <i>Rp. 5.000.000</i>
                    </span>
                  </div>
                </center>
              </div>
            </div>
          </div> -->

          <h4 class="light" style="margin-left: 13px;">Details:</h4>
          
          <table style="margin-left: 13px;">
            <tr style="border-bottom: none!important;">
              <td>Products:</td>
              <td>
                <ol>
                  <?php foreach ($this->cart->contents() as $items): ?>
                    <li><?= $items['name'] ?></li>
                  <?php endforeach; ?>
                </ol>

              </td>
              <td>
                <ul>
                  <?php $total = 0;?>
                  <?php foreach ($this->cart->contents() as $items): ?>

                    <li><i>Rp. <?= number_format($items['price'], 0, ',', '.') ?></i></li>

                    <?php $total += $items['price']; ?>

                  <?php endforeach; ?>
                </ul>

              </td>
            </tr>

            <!-- <tr style="border-bottom: none!important;">
              <td>Price:</td>
              <td>Rp. 5.000.000 + Rp. 5.000.000 + Rp. 5.000.000 + Rp. 5.000.000</td>
            </tr> -->

            <tr style="border-bottom: none!important;">
              <td><b>Total:</b></td>
              <td><b>&emsp; Rp. <?= number_format($total, 0, ',', '.') ?></b></td>
            </tr>
          </table>


        </div>




        <div class="right">

          <a class="waves-effect waves-light btn" href="<?= base_url('checkout') ?>">Proceed to Checkout</a>
        </div>
      <?php else: ?>

        <p>Kantong belanja masih kosong!</p>

      <?php endif; ?>
    </div>



    <br><br><br><br>

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

</body>
</html>