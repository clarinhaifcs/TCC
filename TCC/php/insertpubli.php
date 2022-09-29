<?php
    include ('conexao.php');

    session_start();

    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false) {
        header("location: ../html/formlogin.html");
        exit;
    }

    if(isset($_POST['btnEnv'])) {

    $relato = $_POST['relato'];
    $codUsuario = $_SESSION['cod'];
    
    $sql = "INSERT INTO publicacao (data_pub, relato, cod_usuario)
            VALUES ('','$relato', '$codUsuario')";

    mysqli_query($conn, $sql);
        echo $codUsuario;
    
       /* if (mysqli_affected_rows($conn) > 0) {
              ("<script>
            window.alert('Publicação Postada!')
            window.location.href='http://localhost/staycalm/php/publicação.php';
            </script>");
            } 
            else {
            echo ("<script>
            window.alert('Ocorreu algum erro!')
            window.location.href='http://localhost/staycalm/php/publicação.php';
            </script>");
       } */
    }    

?>