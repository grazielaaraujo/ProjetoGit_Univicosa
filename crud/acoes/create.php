<?php
    session_start();
    require_once 'conexao.php';

    if(isset($_POST['bt_cadastrar'])) {
        $nome  = mysqli_real_escape_string($con, $_POST['nome']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $telefone = mysqli_real_escape_string($con, $_POST['telefone']);
        $datanascimento = mysqli_real_escape_string($con, $_POST['datanascimento']);
        $datacadastro = date ("d-m-Y");
        $dataatualizacao = date ("d-m-Y");
        $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));
         
       
        // CREATE criar, inserir
        $sql = "INSERT INTO professor (nome, email, telefone, datanascimento, datacadastro, dataatualizacao, senha ) VALUES ('$nome','$email', '$telefone', '$datanascimento', '$datacadastro', '$dataatualizacao', '$senha')";

        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            header('Location: ../dashboard.php');
        } else {
            $_SESSION['mensagem'] = "Erro no cadastro!";
            header('Location: ../dashboard.php');
        }
        // FECHAR CONEXAO
        mysqli_close($con);
    }
