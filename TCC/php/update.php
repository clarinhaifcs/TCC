<?php
session_start();
include('conexao.php');

if (isset($_POST['btnEnviar'])) {

    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $ifcs = $_POST['ifcs'];
    $anoEscolar = $_POST['anoEscolar'];
    $sexo = $_POST['sexo'];

    $user = $_SESSION['login'];

    $sql = ("UPDATE usuario 
            SET  login = '$login', senha = '$senha', nome = '$nome', sexo = '$sexo', data_nasc = '$data_nasc', turma = '$anoEscolar', ifcs = '$ifcs'
            WHERE login = '$user'");

    mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) > 0) {
        echo  ("<script>
            window.alert('Informações atualizadas com sucesso!')
            window.location.href='http://localhost/staycalm/php/biblioteca.php';
        </script>");
    } else {
        echo  ("<script>
                window.alert('Ocorreu algum erro!')
                window.location.href='http://localhost/staycalm/php/edicao.php';
            </script>");
    }
}
?>