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
          <a href="<?= base_url('') ?>" class="breadcrumb">Admin</a>
          <a href="<?= base_url('admin/dashboard') ?>" class="breadcrumb">Dashboard</a>
        </div>

      </nav>

    </header>

    <main> 

      <br>

      <h3 class="light center-align">Tabel Transaksi</h3>

      <br>

      <div class="container">

        <div class="row z-depth-2" style="padding: 10px 10px 10px 10px;">
          <table class="responsive-table">
            <thead>
              <tr>
                <th>Id Transaksi</th>
                <th>Layanan</th>
                <th>Jenis Bayar</th>
                <th>Tanggal Tansaksi</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>

              <?php foreach($data_transaksi as $items): ?>
                <tr>
                  <td><?= $items->idTransaksi ?></td>
                  <td><?= $items->jenisLayanan ?></td>
                  <td><?= $items->jenisBayar ?></td>
                  <td><?= $items->tglTransaksi ?></td>
                  <td><?= $items->status ?></td>
                  <td>
                    <?php if($items->status != "pending"): ?>
                      <a class="btn btn-small waves-effect waves-light yellow black-text" href="<?= base_url('Admin/updatestatus/'.$items->idTransaksi.'/pending') ?>">Pending</a><br><br>
                    <?php endif; ?>

                    <?php if($items->status != "done"): ?>
                      <a class="btn btn-small waves-effect waves-light green" href="<?= base_url('Admin/updatestatus/'.$items->idTransaksi.'/done') ?>">Done</a><br><br>
                    <?php endif; ?>


                    <?php if($items->status != "acc"): ?>
                      <a class="btn btn-small waves-effect waves-light blue" href="<?= base_url('Admin/updatestatus/'.$items->idTransaksi.'/acc') ?>">Acc</a><br><br>
                    <?php endif; ?>

                  </td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
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