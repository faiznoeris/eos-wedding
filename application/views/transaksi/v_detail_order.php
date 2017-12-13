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
          <a href="<?= base_url('checkout') ?>" class="breadcrumb">Checkout</a>
          <a href="<?= base_url('detailorder') ?>" class="breadcrumb">Detail Order</a>
        </div>

      </nav>

    </header>

    <main> 

      <br>

      <h3 class="light center-align">Detail Order</h3>

      <br>

      <div class="container">

        <div class="row z-depth-2" style="padding: 10px 10px 10px 10px;">




          <div class="row">
            <h5 class="light center-align">Deskripsi Pembayaran</h5>
            <div class="col s12 m6 offset-l3 offset-m3 z-depth-2">

              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit orci eget leo posuere placerat. Etiam condimentum, nibh ac maximus aliquet, enim leo tristique nisi, eu congue magna tellus a felis. Mauris ut augue magna. Etiam vel urna vitae nisl molestie ultrices sagittis in velit. Duis ornare leo eros, eget lacinia dui consequat rhoncus.
              </p>

            </div>
          </div>


          <div class="row">
            <div class="col s12 m6 offset-l3 offset-m3">
              <h5 class="light center-align">Our Bank Details</h5>
              <table class="centered">

                <tbody>
                  <tr style="border-bottom: none!important;">

                    <td style="border-right: 1px solid rgba(0,0,0,0.12)!important;"><b>Bank</b></td>
                    <td style="border-right: 1px solid rgba(0,0,0,0.12)!important;"><b>Account Number</b></td>
                    <td><b>Name</b></td>

                  </tr>

                  <tr style="border-bottom: none!important;">

                    <td style="border-right: 1px solid rgba(0,0,0,0.12)!important;">Nama Bank</td>
                    <td style="border-right: 1px solid rgba(0,0,0,0.12)!important;">No Rekening</td>
                    <td>Atas Nama</td>
                    
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="row">
            <div class="col s12 m6 offset-l3 offset-m3">
              <h5 class="light center-align">Order Details</h5>
              <table class="centered">
                <thead>
                  <tr class="teal white-text" style="border-top: 1px solid rgba(0,0,0,0.12)!important; border-left: 1px solid rgba(0,0,0,0.12)!important; border-right: 1px solid rgba(0,0,0,0.12)!important;">
                    <th width="70%" style="border-right: 1px solid rgba(0,0,0,0.12)!important;">Products</th>
                    <th>Total</th>
                  </tr>
                </thead>

                <tbody>
                  <tr style="border-left: 1px solid rgba(0,0,0,0.12)!important; border-right: 1px solid rgba(0,0,0,0.12)!important;">
                    <td style="border-right: 1px solid rgba(0,0,0,0.12)!important;"><?= $data_customer['namalayanan'] ?></td>
                    <td><i>Rp. <?= number_format($data_customer['hargalayanan'], 0, ',', '.') ?></i></td>
                  </tr>
                  <!-- <tr style="border-left: 1px solid rgba(0,0,0,0.12)!important; border-right: 1px solid rgba(0,0,0,0.12)!important;">
                    <td style="border-right: 1px solid rgba(0,0,0,0.12)!important;">Make Up Pesta</td>
                    <td><i>Rp. 5.000.000</i></td>
                  </tr> -->
                  <tr style="border-right: 1px solid rgba(0,0,0,0.12)!important; border-left: 1px solid rgba(0,0,0,0.12)!important;">
                    <td class="teal white-text" style="border-right: 1px solid rgba(0,0,0,0.12)!important;"><b>Total</b></td>
                    <td><i>Rp. <?= number_format($data_customer['hargalayanan'], 0, ',', '.') ?></i></td>
                  </tr>
                  <tr style="border-right: 1px solid rgba(0,0,0,0.12)!important; border-left: 1px solid rgba(0,0,0,0.12)!important;">
                    <td class="teal white-text" style="border-right: 1px solid rgba(0,0,0,0.12)!important;"><b>Payment Method</b></td>
                    <td><?= $data_customer['metodepembayaran'] ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>


          <div class="row">
            <div class="col s12 m6 offset-l3 offset-m3">
              <h5 class="light center-align">Customer Details</h5>
              <table class="centered">

                <tbody>
                  <tr style="border-top: 1px solid rgba(0,0,0,0.12)!important; border-left: 1px solid rgba(0,0,0,0.12)!important; border-right: 1px solid rgba(0,0,0,0.12)!important;">
                    <td width="30%" class="teal white-text" style="border-right: 1px solid rgba(0,0,0,0.12)!important;"><b>Email: </b></td>
                    <td><?= $data_customer['email'] ?></td>
                  </tr>
                  <tr style="border-right: 1px solid rgba(0,0,0,0.12)!important; border-left: 1px solid rgba(0,0,0,0.12)!important;">
                    <td class="teal white-text" style="border-right: 1px solid rgba(0,0,0,0.12)!important;"><b>Nama: </b></td>
                    <td><?= $data_customer['name'] ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>


          <div class="row" style="margin-top: 40px;">
            <h5 class="light center-align">Billing Address</h5>
            <div class="col s12 m6 offset-l3 offset-m3 z-depth-2">

              <p>
                a.n <?= $data_customer['name'] ?>
              </p>

              <p>
               <?= $data_customer['alamat'] ?>
             </p>

             <p>
              No. Telepon: <?= $data_customer['telp'] ?>
            </p>

          </div>
        </div>




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
      $('.tooltipped').tooltip();
    });

  </script>

</body>
</html>