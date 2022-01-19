<?php
    session_start(); 
    //Incluindo a conexão com banco de dados   
    include_once("Db.class.php");   
    
    //O campos preenchidos para entra no if para validar
    if((isset($_POST['email']))){
        $email = $_POST['email'];
        

        //Busca se o email ja é cadastrado
        $result_email = "SELECT * FROM emails WHERE Email = '$email' LIMIT 1";
        $resultado_email = mysqli_query($conn, $result_email);
        $resultado = mysqli_fetch_assoc($resultado_email);
         
        if(isset($resultado)){

            $_SESSION['MensagemNewsletterErro'] = "E-mail já cadastrado na Newsletter da Autobotz.";
            header("Location: ../index.php#group"); 

        }else{

            //Adiciona novo email na lista da newsletter
            $inserir_email = "INSERT INTO emails (Email) VALUES ('$email')";
                    
            if(mysqli_query($conn, $inserir_email)){
            // echo "Deu certo";
            }else{
            //  echo "Errado";
            } 
            mysqli_close ($conn) ;
        
            $_SESSION['MensagemNewsletterErro'] = "Messagem enviada com sucesso!";
            header("Location: ../index.php#group"); 
        }
        
    }else{
        $_SESSION['MensagemNewsletterErro'] = "Preencha um e-mail válido.";
        header("Location: ../index.php#group");
    }
?>