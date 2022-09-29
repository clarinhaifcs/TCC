<?php
    include ('conexao.php');

    if(isset($_POST['btnEnviar'])) {

    $nome = $_POST ['nome'];
    $data_nasc = $_POST ['data_nasc'];
    $login = $_POST ['login'];
    $senha = $_POST ['senha'];
    $ifcs = $_POST ['ifcs'];
    $anoEscolar = $_POST ['anoEscolar'];
    $sexo = $_POST ['sexo'];
     

    $sql = "INSERT INTO usuario (login , senha, nome, turma , sexo, data_nasc, ifcs)
            VALUES ('$login', '$senha', '$nome','$anoEscolar', '$sexo', '$data_nasc', '$ifcs')";

    mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) > 0) {
            echo "<script> alert('Usuário cadastrado com sucesso.') </script>";
            } 
            else {
            echo "<script> alert('Ocorreu algum erro.') </script>";
        } 
    }      

?>
