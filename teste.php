<head>
   <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    
        <title>Perfil de usuário</title>
    
        <!-- Bootstrap CSS CDN -->
       <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity = "sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin = "anonymous">
      
        <!-- Our Custom CSS -->
        <link rel = "stylesheet" href = "teste_pass.css">
       
    
        <!-- Font Awesome JS -->
        <script defer src = "https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity = "sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin = "anonymous"></script>
        <script defer src = "https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity = "sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin = "anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <script type="text/javascript" src="js/function.js"></script>
</head>

<body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Reset Password</h2>
        <input type="password" id="password" class="form-control first" placeholder="Password" autofocus>
        <input type="password" class="form-control last" placeholder="Confirm Password">
        <div class="progress progress-striped active">
          
          <div id="jak_pstrength" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
          <hr>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Save Password</button>
      </form>
      
      <hr>
      
  

    </div> <!-- /container -->
    
    <!-- get the function -->
    
    
    <script type="text/javascript">
    jQuery(document).ready(function(){
    	jQuery("#password").keyup(function() {
    	  passwordStrength(jQuery(this).val());
    	});
    });
    </script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>