<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>xPaper</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style type="text/css">
      body{
        background-color: white;
      }
      

      
    </style>
    
  </head>

  <body >
     <?php
         unset(
          $_SESSION['usuariid'],      
          $_SESSION['usuarioemail'] , 
          $_SESSION['usuariosenha'],  
          $_SESSION['usuarionome']   
      );
      ?>

    <div class="container ">

        <br />
        <br />
        <br />
       <div class="text-center  ">
        <img src="images/logo.png">
         </div>
      <form class="form-signin" method="POST" action="userValidation.php">
        
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="email" name="email" class="form-control" placeholder="E-mail" required autofocus>
        <br />
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
       <div class="text-center">
        <a href="register.php" class="text-primary">Cadastrar!</a>
       </div> 
      </form>
      
      <p class="text-center text-danger">
        <?php 
          if (isset($_SESSION['loginErro'])) {
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);   
            
          }
        ?>
      </p>
      <br />
      </div> <!-- /container -->
         <div id="img" class=" text-center">
           <a href="http://www.eucatex.com.br/pt/"> <img src="images/site.gif"></a>
           <a href="https://www.facebook.com/EucatexOficial"> <img src="images/facebook.gif"></a>
           <a href="https://twitter.com/Eucatex_Oficial"> <img src="images/twiter.gif"></a>
           <a href="https://br.pinterest.com/tintaseucatex/  "> <img src="images/pintes.gif"></a>
           <a href="https://www.instagram.com/eucatex_oficial/"> <img src="images/instagram.gif"></a>
         </div>
  

       <br/>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
