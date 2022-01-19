<?php
    session_start(); 
    include_once("Db.class.php");
    
    //Variaveis auxiliares
    $usuario_seg = $_SESSION['usuarioEmail'];
    $senha_seg= $_SESSION['usuarioSenha'];

    //Atualiza para deslogado
    $logado_usuario = "UPDATE `usuarios` SET `Status`= 0 WHERE Email = '$usuario_seg' LIMIT 1";
    $logado_update = mysqli_query($conn, $logado_usuario);

    unset(
        $_SESSION['usuarioCPF'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioHierarquia'],
        $_SESSION['usuarioEmail'],
        $_SESSION['usuarioStatus']
    );   
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
    //redirecionar o usuario para a página de login
    header("Location: ../login/");
?>