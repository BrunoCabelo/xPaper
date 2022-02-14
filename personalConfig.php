<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="Bruno Assis">
        <link rel="icon" href="images/favicon.ico">


        <title>xPaper</title>

        <link href="css/bootstrapValidator.min.css" rel="stylesheet">
        <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/dashboard.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">

    </head>

    <?php
    session_start();
    include_once("conection.php");

    include_once("sessionValidation.php");
    ?>
    <body>

     <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">    
                <div class="navbar-header">   
                    <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#navbarNav" aria-expanded="true"        aria-controls="navbarNav" aria-label="Toggle navigation">   
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">xPaper</a>
                </div>

                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="nav navbar-nav navbar-right">
                          <?php 
                                if ($_SESSION['status'] == 2) {
                                    echo  '<li><a href="users.php"><span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"> Usuarios</a></li>';
                                }
                               ?>
                                
                                 <li><a href="index.php"><span class="glyphicon glyphicon-cd" aria-hidden="true"> Bobinas</a></li>   
                                                             
                                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"> Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        
        <div class="text-center title">
          <h1><small>Configurações pessoais</small></h1>
        </div>
     
    <div class="" style="max-width:350px;margin:40px auto;">
     
         <div class="text-center"> 
           
            
             <form class="form-signin" role="form" style="padding-left:20px; padding-right:20px;" id="registration-form" >
              
              <div class="form-group">
                
                <input id="email" name="email" class="form-control" value="<?php echo $_SESSION['usuarioemail']; ?>" type="email">
              </div>
             
              <div class="form-group">

                <input id="nome" name="nome" class="form-control" value="<?php echo $_SESSION['usuarionome']; ?>" type="">
              </div>


              <div class="form-group">
                
                 <input id="senha_atual" type="password" class="form-control" id="Password" name="senha_atual" placeholder="Digite a senha atual">

              </div>

              <div class="form-group">    
                 <input id=" nova_senha" type="password" class="form-control" id="Password" name="nova_senha" placeholder="Digite sua nova senha">
                   
              </div>
            
                   
              
              <div class="form-group">
                <button id="alterar" name="concluir" class="btn btn-lg btn-primary btn-block " >Alterar</button>
             </div>
                          
            </form>
           </div>
              <div class="">
                <p id="erro" class="text-center text-danger"></p>  
              </div>
  
             </div>
           </div>
         </div>

              <br />
    
<br />
<br />
<br />
<div id="img" class=" text-center">
    <a href="http://www.eucatex.com.br/pt/"> <img src="images/site.gif"></a>
    <a href="https://www.facebook.com/EucatexOficial"> <img src="images/facebook.gif"></a>
    <a href="https://twitter.com/Eucatex_Oficial"> <img src="images/twiter.gif"></a>
    <a href="https://br.pinterest.com/tintaseucatex/  "> <img src="images/pintes.gif"></a>
    <a href="https://www.instagram.com/eucatex_oficial/"> <img src="images/instagram.gif"></a>
</div>

</div> <!-- /container -->

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<script type="text/javascript" language="javascript" src="js/jquery-1.12.3.min.js">

    < script > window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="js/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/moment.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>

</script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js">
</script>
<script scr="js/bootstrap-select.min.js"></script>
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
                    senha_atual: {
                    validators: {
                      notEmpty : {
                                 message : "Informe sua senha"
                      }
                    }
                  },
                  nova_senha: {
                    validators: {
                     notEmpty: {
                      message: 'Informe sua senha'
                    }  
                    }
                  },
                }
          });

      $('#alterar').click(function(){
        console.log("ok");

        $('#registration-form').bootstrapValidator('validate');
        //Verifica se está válido e, caso positivo, submete via Ajax
        var bootstrapValidator = $('#registration-form').data('bootstrapValidator');
          
        var dados = $("#registration-form").serialize();
         //funcionou  
        if(bootstrapValidator.isValid()){
          
          $.post( "updateUser.php", $( "#registration-form" ).serialize(), function (data){
           if (data == 1) {
            $("#erro").text('Alteração efetuada com sucesso!').removeClass("text-danger").addClass("text-success");
           }
           if (data == 2){
            $("#erro").text('');
           }
          if (data == 3) {
            $("#erro").text('Senha incorreta').removeClass("text-success").addClass("text-danger");
          }
         
          });
                  
            

        }else{
          


        }
      });
       
      
          });
       </script>


</body>
</html>
