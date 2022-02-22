<?php
    // READ = ler, consultar
    $sql = "SELECT * from professor";
    $resultado = mysqli_query($con, $sql);
    // usar $dados = mysqli_fetch_array($resultado)
    // dentro de um laço enquanto para escrever

   // $sql_discplinas = "SELECT * from professor";
    //$resultado_disciplinas = mysqli_query($con, $sql_discplinas);