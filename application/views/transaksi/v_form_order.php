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
          <a href="<?= base_url('checkout') ?>" class="breadcrumb">Checkout</a>
        </div>

      </nav>

    </header>

    <main> 

      <br>

      <h3 class="light center-align">Billing Details</h3>

      <br>

      <div class="container">

        <div class="row z-depth-2" style="padding: 10px 10px 10px 10px;">

          <?php foreach ($this->cart->contents() as $items): ?>
            <?php $rowid = $items['rowid']; ?>
          <?php endforeach; ?>


          <br>
          <form method="post" action="<?php echo base_url('Ordering/placeorder/'.$rowid);?>">

            <?php if(!$loggedin): ?>
              <div class="col s12 offset-l3 offset-m3">

                <div class="row">
                  <a href="<?= base_url('login') ?>" class="flow-text" style="font-size: 16px; margin-left: 55px;"><b>Returning customer? Click here to login.</b></a>
                </div>

                <div class="row">
                  <div class="input-field col s6 m3">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="firstname" type="text" class="validate" name="firstname" required>
                    <label for="firstname">First Name</label>
                  </div>
                  <div class="input-field col s6 m3">
                    <input id="lastname" type="text" class="validate" name="lastname" required>
                    <label for="lastname">Last Name</label>
                  </div>
                </div>

                <div class="row">
                 <div class="input-field col s12 m6">
                  <i class="material-icons prefix">streetview</i>
                  <input id="address" type="text" class="validate" name="address" required>
                  <label for="address">Street Address</label>
                </div>
              </div>

              <div class="row">
               <div class="input-field col s12 m6">
                <i class="material-icons prefix">location_city</i>
                <input id="city" type="text" class="validate" name="city" required>
                <label for="city">Town / City</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12 m3">
                <i class="material-icons prefix">phone</i>
                <input id="nomorhp" type="tel" class="validate" name="nomorhp" required>
                <label for="nomorhp">Nomor HP</label>
              </div>

              <div class="input-field col s12 m3">
                <i class="material-icons prefix">email</i>
                <input id="email" type="email" class="validate" name="email" required>
                <label for="email">Email</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12 m6">
                <i class="material-icons prefix">vpn_key</i>
                <input disabled value="" id="disabled" type="password" class="validate">
                <label for="disabled">Password</label>
              </div>
            </div>

            <div class="row">
             <div class="input-field col s12 m6" style="margin-left: 45px; margin-bottom: 5px; margin-top: -45px;">
              <p>
                <label>
                  <input type="checkbox" id="createaccount" name="createaccount"/>
                  <span>Create an account?</span>
                </label>
              </p>
            </div>
          </div>


          <div class="row">
            <div class="input-field col s12 m6">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="textarea1" class="materialize-textarea" data-length="120" name="info"></textarea>
              <label for="textarea1">Additional Information</label>
            </div>
          </div>

        </div>

      <?php else: ?>

        <center>
          <h5 class="light">Welcome <i>*namalengkap*</i></h5>
        </center>

      <?php endif; ?>

      <br>
      <center>
        <h4 class="light">Your Order</h4>
      </center>


      <div class="row">
        <div class="col s12 m6 offset-l3 offset-m3">
          <table class="centered">
            <thead>
              <tr class="teal white-text" style="border-top: 1px solid rgba(0,0,0,0.12)!important; border-left: 1px solid rgba(0,0,0,0.12)!important; border-right: 1px solid rgba(0,0,0,0.12)!important;">
                <th width="70%" style="border-right: 1px solid rgba(0,0,0,0.12)!important;">Products</th>
                <th>Total</th>
              </tr>
            </thead>

            <tbody>
              <?php $total = 0; ?>
              <?php foreach ($this->cart->contents() as $items): ?>

                <tr style="border-left: 1px solid rgba(0,0,0,0.12)!important; border-right: 1px solid rgba(0,0,0,0.12)!important;">

                  <td style="border-right: 1px solid rgba(0,0,0,0.12)!important;"><?= $items['name'] ?></td>
                  <td><i>Rp. <?= number_format($items['price'], 0, ',', '.') ?></i></td>
                  <?php $total += $items['price'] ?>

                </tr>
              <?php endforeach; ?>
              <!-- <tr style="border-left: 1px solid rgba(0,0,0,0.12)!important; border-right: 1px solid rgba(0,0,0,0.12)!important;">
                <td style="border-right: 1px solid rgba(0,0,0,0.12)!important;">Make Up Pesta</td>
                <td><i>Rp. 5.000.000</i></td>
              </tr> -->
              <tr style="border-right: 1px solid rgba(0,0,0,0.12)!important; border-left: 1px solid rgba(0,0,0,0.12)!important;">
                <td class="teal white-text" style="border-right: 1px solid rgba(0,0,0,0.12)!important;"><b>Total</b></td>
                <td><i><b>Rp. <?= number_format($total, 0, ',', '.') ?></b></i></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12 m6 offset-l3 offset-m3" style="margin-top: -20px;">
          <p>
            <label>
              <input name="metodepembayaran" type="radio" value="direct" required />
              <span>Direct Bank Transfer</span>
            </label>
          </p>
          <p>
            <label>
              <input name="metodepembayaran" type="radio" value="cod" />
              <span>Cash on Delivery</span>
            </label>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12 m6 offset-l3 offset-m3" style="margin-top: -20px;">
          <p>
            <label class="tooltipped" data-position="top" data-delay="50" data-tooltip="

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend, enim non sodales eleifend, leo orci lacinia nunc, sed tincidunt turpis arcu ut dui. 

            <br><br>Proin fringilla semper sem, eleifend malesuada dolor pulvinar non. 

            Curabitur ut neque massa. Duis leo libero, consequat at dapibus feugiat, tincidunt sit amet ipsum. 
            
            <br><br>Suspendisse viverra felis dui. Pellentesque condimentum, mi commodo placerat posuere, nunc urna mattis leo, et hendrerit dolor enim non augue. Nullam leo lorem, pretium ac tempus ac, tincidunt id sapien. Vivamus ultrices ligula in metus malesuada, eget fermentum velit mattis. Praesent fermentum volutpat urna, ac lacinia urna suscipit non. Nulla vitae lacus laoreet, hendrerit felis eget, viverra sem. Proin condimentum euismod arcu. Sed at purus semper, dignissim nulla sit amet, sagittis ligula. Vestibulum mauris nunc, lacinia at dui vel, dictum commodo nisi. Sed dignissim diam id eros faucibus condimentum. Vestibulum rutrum libero ut elit interdum, ac pharetra ligula tincidunt. Vivamus ornare imperdiet metus at dignissim.">

            <input type="checkbox" name="term" required />
            <span>I read and accept the term & conditions</span>
          </label>
        </p>
      </div>
    </div>

    <br>

    <div class="row center-align">
      <button class="btn waves-effect waves-light" type="submit" name="action">Place Order
        <i class="material-icons right">shopping_basket</i>
      </button>
    </div>
  </form>



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
    $('textarea#textarea1').characterCounter();
  });

  $('#createaccount').change(function(){
    if (this.checked) {
      $('#disabled').removeAttr('disabled');
      $('#disabled').attr("required","");
      
    }else{
      $('#disabled').attr("disabled","");
      $('#disabled').removeAttr('required');
    }
  }); 

</script>

</body>
</html>