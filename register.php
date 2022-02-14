<?php 
  if (isset($_POST["dados"])) {
    echo "oi";
    die();
  }
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
     <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
     <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!-- Última versão CSS compilada e minificada -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
         <link rel="stylesheet" type="text/css" href="css/bootstrapValidator.min.css">

    <!-- Última versão JavaScript compilada e minificada -->
    <script src="js/jquery.min.js"  type="text/JavaScript"></script>
    <script src="js/bootstrap.min.js" type="text/JavaScript"></script>
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style type="text/css">
      body{
        background-color: white;
      }
    </style>


    
</head>
<body>
  <div class="container ">

        <br />
      
      
       <div class="text-center  ">
        <img src="images/logo.png">
        </div>

       <div class="text-center"> 
          <div class=" " style="max-width:600px;margin:60px auto;"> 
            
             <form class="form-signin" role="form" id="registration-form" >
              
              <div class="form-group">
                
                <input id="email" name="email" class="form-control" placeholder="Digite seu E-mail" type="email">
              </div>

              <div class="form-group">        
                
                 <input id="nome" name="nome" class="form-control" placeholder="Digite seu Nome..." type="text" >
              </div>

              <div class="form-group">
                
                 <input id="senha" type="password" class="form-control" id="Password" name="senha" placeholder="Informe sua senha">
                  
              </div>

              
              
                <button id="concluir" name="concluir" class="btn btn-lg btn-primary btn-block " >Cadastrar</button>
                <div class="text-center">
                 <a href="login.php" class="text-primary">Logar!</a>
               </div> 
               
           </form>


      <p id="erro" class="text-center text-danger">
       
      </p>
  
        </div>
         </div>

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
  </div>
   <script src="js/bootstrapValidator.js"></script>
       <script type="text/javascript">
         $(document).ready (function ()  {
       $('#registration-form').bootstrapValidator({
                feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
          },
                fields: {
                  email: {
                    validators: {
                      notEmpty : {
                                 message : "Informe seu endereco de email"
                      }
                    }
                  },
                  nome: {
                    validators: {
                      notEmpty : {
                                 message : "Informe seu nome "
                      }
                    }
                  },
                    senha: {
                    validators: {
                      notEmpty : {
                                 message : "Informe sua senha"
                      }
                    }
                  },
                }
          });

      $('#concluir').click(function(){
        $('#registration-form').bootstrapValidator('validate');
        //Verifica se está válido e, caso positivo, submete via Ajax
        var bootstrapValidator = $('#registration-form').data('bootstrapValidator');
          
        var dados = $("#registration-form").serialize();
         //funcionou  
        if(bootstrapValidator.isValid()){

          $.post( "insertUser.php", $( "#registration-form" ).serialize(),function(data){
          if (data == 1) {
            $("#erro").text('Email ja cadastrado');
           }else{
            window.location.replace("index.php");
                       
           }  
          });            
        }
      });
     });
       </script>


  <script src="js/validator.min.js"></script>
</body>
</html>