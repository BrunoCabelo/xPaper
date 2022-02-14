<?php 
  session_start();

  $usuariot = $_POST['email'];
  $senhat = $_POST['senha'];

    //echo  $usuariot.' - '.$senhat;
  include_once("conection.php"); 

  $result = mysqli_query($con, "SELECT * FROM usuarios WHERE email='$usuariot' AND senha='$senhat'" ); 
  $resultado = mysqli_fetch_assoc($result);
  //echo $resultado['nome'];
  if (empty($resultado)) {
  	$_SESSION['loginErro'] = "Email ou senha inválidos."; 
  	
  	header("location: login.php");
  }
  else {
  	$_SESSION['usuariid']      = $resultado['id'];
    $_SESSION['usuarioemail']  = $resultado['email'];
    $_SESSION['usuariosenha']  = $resultado['senha'];
    $_SESSION['usuarionome']   = $resultado['nome'];
    $_SESSION['status']        = $resultado['status'];
  	
    if ($resultado['status']==0) {
         $_SESSION['loginErro'] = "Usuario nao liberado."; 
    
    header("location: login.php");
    }else{
      header("location: index.php");
    }
  }

  ?>