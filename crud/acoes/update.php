<?php
    session_start();
    require_once 'conexao.php';

    if(isset($_POST['bt_editar'])) {
        

        $nome  = mysqli_real_escape_string($con, $_POST['nome']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $telefone = mysqli_real_escape_string($con, $_POST['telefone']);
        $datanascimento = mysqli_real_escape_string($con, $_POST['datanascimento']);
        $dataatualizacao = date ('d-m-Y');

       
        $id = mysqli_real_escape_string($con, $_POST['id']);


        $sql = "UPDATE professor SET nome = '$nome', email = '$email',  telefone = '$telefone', datanascimento = '$datanascimento', dataatualizacao = '$dataatualizacao' WHERE idmatricula = '$id'";

        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Registro editado com sucesso!";
            header('Location: ../dashboard.php');
        } else {
            $_SESSION['mensagem'] = "Erro na edição do registro!";
            header('Location: ../dashboard.php');
        }
        // FECHAR CONEXAO
        mysqli_close($con);
    }
