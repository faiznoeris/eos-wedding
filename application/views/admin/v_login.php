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



    </nav>

  </header>

  <br><br>


  <main class="valign-wrapper center-align hide-on-med-and-up"> 



    <div class="container">

      <div class="row z-depth-2 grey lighten-5" style="padding: 10px 10px 10px 10px; width: 75%">

       <form>
        <br>
        <center>
          <img class="responsive-img" src="https://svn.apache.org/repos/asf/lucene.net/trunk/branding/logo/lucene-net-icon-512x256.png" style="height: 120px;">
        </center>

        <div class="col s12 offset-l2 offset-m2">

          <div class="section"></div>

          <div class='row'>
            <div class='input-field col s12 m8'>
              <i class="material-icons prefix">person</i>
              <input class="validate login" type='text' name="username" />
              <label for='username'>Username</label>
            </div>
          </div>
          <div class="row">
            <div class='input-field col s12 m8'>
              <i class="material-icons prefix">vpn_key</i>
              <input class="validate login" type='password' name="password" />
              <label for='password'>Password</label>
              <br><br>
            </div>
            <label class="left">
              <b class='red-text text-darken-2'><?php if(isset($error)){echo $error;} ?></b>
            </label>
          </div>
        </div>


        <div class="row center-align">
          <button class="btn waves-effect waves-light" type="submit" name="action" style="width: 50%">
            Login
          </button>
        </div>
      </div>

    </form>

  </div>




  



</div>



</main>






<main class="valign-wrapper center-align hide-on-small-only"> 



  <div class="container">

    <div class="row z-depth-2 grey lighten-5" style="padding: 10px 10px 10px 10px; width: 50%">

     <form method="post" action="<?= base_url('Admin/login') ?>">
      <br>
      <center>
        <img class="responsive-img" src="https://svn.apache.org/repos/asf/lucene.net/trunk/branding/logo/lucene-net-icon-512x256.png" style="height: 120px;">
        <h3 class="light">ADMIN LOGIN</h3>
      </center>

      <div class="col s12 offset-l2 offset-m2">

        <div class="section"></div>

        <div class='row'>
          <div class='input-field col s12 m8'>
            <i class="material-icons prefix">person</i>
            <input class="validate login" type='text' id="username" name="username" required/>
            <label for='username'>Username / Email</label>
          </div>
        </div>
        <div class="row">
          <div class='input-field col s12 m8'>
            <i class="material-icons prefix">vpn_key</i>
            <input class="validate login" type='password' id="password" name="password" required/>
            <label for='password'>Password</label>
            <br><br>
          </div>
        </div>
        <div class="row">
          <label class="left">
            <b class='red-text text-darken-2'><?php if(isset($error)){echo $error;} ?></b>
          </label>
        </div>
      </div>



      <div class="row center-align">
        <button class="btn waves-effect waves-light" type="submit" name="action" id="btnsubmit" style="width: 50%">
          Login
        </button>
      </div>
    </div>

  </form>

</div>







</div>



</main>

<br>
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

  //SET AUTOFOCUS KE PALING BAWAH KALO ADA ERROR DI REGISTER
  $(function() {
    var link = location.href;
    if(link.includes("login/gagal")){
      $("#btnsubmit").get(0).focus();
    }
  });


</script>

</body>
</html>