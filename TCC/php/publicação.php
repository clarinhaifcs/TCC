<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false){
    header("location: ../html/formlogin.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt"> 
    <head>
        <meta charset="UTF-8">
        <title>Tela de Publicação</title>
        <link rel="stylesheet" type="text/css" href="../css/publicacao.css">
    </head>

    <body> 
        <form action="logout.php" method="POST">
        <input type="submit" value="Sair" name="btnLogout" class="btnSup">
        </form>
        <a href="biblioteca.php">
            <input type="button" value="Voltar" class="btnVoltar">
        </a>
        <h1>Ansiedade Escolar</h1>
            <p class="blocotext1">A ansiedade em ambiente escolar é comum no ensino médio devido a fatores que podem provocar estresse, alguns componentes importantes da ansiedade que podem interferir na aprendizagem e no desempenho em geral do aluno são a tensão, a incerteza e apreensão em relação ao futuro.</p>
            <p class="blocotext2">O site se propõe um lugar seguro, para compartilhar relatos e experiências com outros estudantes que também lidam com ansidedade escolar.
        </p>
        <p class="blocotext3">Compartilhe aqui seu relato ou experiência.</p>
        
        <form action ="insertpubli.php" class="upload" method="POST" id="formrelato">
            <textarea form="formrelato" id="txtArea" rows="10" cols="90" name="relato"></textarea>
            <br>
            <br>
            <input type="submit" value="Enviar" name="btnEnv" class="btnEnviar">
        </form>
    <img class="logo" src="../img/Stay Calm.png" alt="logo" width=100 height=100>
    <img class="usuario" src="../img/usuário.png" alt="perfilusuario" width="80" height="80"> <p class="nomeusuario">Usuário1</p>
    <p class="publicacao">Desde que comecei a usar o conteúdo do site me sinto menos ansioso e mais confiante diante de provas ou trabalhos, estou adorando!!</p>
    </body>
</html>

