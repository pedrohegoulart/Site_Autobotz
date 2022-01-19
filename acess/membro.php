<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("Db.class.php");   
    
    //O campo usuário e senha preenchido entra no if para validar
    if( !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['curso']) && !empty($_POST['area']) && !empty($_POST['mensagem']) ){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $curso = $_POST['curso'];
        $area = $_POST['area'];
        $mensagem = $_POST['mensagem'];
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $inserir_email = "INSERT INTO membro(Nome, Curso, Email, Area, Mensagem) VALUES ('$nome','$curso','$email','$area','$mensagem')";
        
        
        if(mysqli_query($conn, $inserir_email)){
           // echo "Deu certo";
        }else{
          //  echo "Errado";
        }
        mysqli_close ($conn) ;
        /*/Encontrado um usuario novamente como status atuaizado
        $result_usuario = "SELECT `Email` FROM apoio WHERE Email = '$email' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);*/
        
        $_SESSION['MensagemMembroErro'] = "Messagem enviada com sucesso!";
        header("Location: ../membros.php#contact");

    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['MensagemMembroErro'] = "Preencha todos os campos do formulário.";
        header("Location: ../membros.php#contact");
    }
?>