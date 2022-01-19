<?php
    //Segunrança - Permite o acesso na página
    if ($_SESSION['usuarioStatus'] != 1) {
      $_SESSION['loginErro'] = "Área para usuário logados"; 
      header("Location: ../login/");
    } else {
      //$idUsuario = $_SESSION['idUsuario'];
    }
?>
