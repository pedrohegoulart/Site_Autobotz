<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("Db.class.php");   
    
    //O campo usuário e senha preenchido entra no if para validar
    if((!empty($_POST['nome'])) && (!empty($_POST['email'])) && (!empty($_POST['telefone']))&& (!empty($_POST['assunto']))&& (!empty($_POST['mensagem']))){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $inserir_email = "INSERT INTO apoio (Nome, Email, Assunto, Mensagem, Telefone) VALUES ('$nome','$email','$assunto','$mensagem','$telefone')";
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
        
        $_SESSION['MensagemApoioErro'] = "Messagem enviada com sucesso!";
        header("Location: ../apoiador.php#contact");

    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['MensagemApoioErro'] = "Preencha todos os campos do formulário.";
        header("Location: ../apoiador.php#contact");
    }
?>