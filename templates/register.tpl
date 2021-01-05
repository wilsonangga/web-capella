<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT. Capella Medan - Admin Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="{$_url}images/capella.png"/>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">
                <img src="{$_url}images/logo/logo_capela_medan.png" alt="" class="w-100">
            </div>
            <div class="card-body">
                <form method="post" action="register.php" target="frame_action">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                            <label for="inputEmail">Email address</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required="required">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" name="inputPassword2" id="inputPassword2" class="form-control" placeholder="Confirm Password" required="required">
                            <label for="inputPassword2">Confirm Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" name="inputToken" id="inputToken" class="form-control" placeholder="Token" required="required">
                            <label for="inputToken">Token</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
                </form>
          </div>
        </div>
    </div>
    {assign var="viewFrame" value=0}
        {if $viewFrame eq 1} 
            <iframe name="frame_action" id="frame_action" src="kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;background:white;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
        {else}
            <iframe name="frame_action" id="frame_action" src="kosong.php" width="100%" height="10" style="overflow:hidden;" visibility="hidden" scrolling="no" frameborder="0"></iframe>
        {/if}
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
