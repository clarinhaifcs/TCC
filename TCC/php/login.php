<?php
    include ('conexao.php');
    session_start();

    $nomeUsuario = $_POST['nomeUsuario'];
    $senhaUsuario = $_POST['senhaUsuario'];

    $sql =  ("SELECT * FROM usuario
    WHERE  login = '$nomeUsuario' AND senha = '$senhaUsuario'");

    mysqli_query($conn, $sql);

    $result = mysqli_query($conn, $sql);
    $codUsuario = mysqli_insert_id($conn);

 
    if(mysqli_affected_rows ($conn) > 0 )
    {
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['login'] = $nomeUsuario;
        $_SESSION['senha'] = $senhaUsuario;
        $_SESSION['cod'] = $codUsuario;
        header("location:biblioteca.php");
        die();
    }
    else{
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        echo ("<script>
            window.alert('Usuário ou senha incorretos!')
            window.location.href='http://localhost/staycalm/html/formlogin.html';
            </script>");
        die();
    }
?>