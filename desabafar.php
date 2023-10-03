<?php

session_start();

if (isset($_POST['submit'])) {
    include_once('config.php');

    $login = $_SESSION['email'];

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $desabafo = $_POST['desabafo'];
    
    date_default_timezone_set('America/Sao_Paulo');
    $dataHora = date('Y-m-d H:i:s');

    
    $query = "INSERT INTO relatos (email, nome, idade, genero, desabafo, datahora) VALUES ('$login', '$nome', '$idade', '$genero', '$desabafo', '$dataHora')";

    $result = mysqli_query($conexao, $query);
    header('Location: desa-relatos.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="perg.css">
    <title>PERGUTAS</title>
    <script src="Javascript/perg.js" defer></script>
    <script src="https://kit.fontawesome.com/5bae496e86.js" crossorigin="anonymous"></script>
</head>

<body>
   <header class="menu">   
      <a class="titulo" href="indexusuario.php">LUTO SEM CORPO</a>
        <nav class="navmenu">
        <a class="menuitem" href="#" target="_blank">SOBRE-NÓS</a>
        <a class="menuitem" href="conta.php">CONTA</a>
   </header>
    
   <main class="conteudo">
      
      <section class="form-conteiner">

         <div class="pesquisas-conteiner">
            <form class="desabafo-formulario" action="desabafar.php" method="POST">
               <h2>CONTE O QUE VOCÊ ESTÁ PASSANDO</h2>
               <input type="text" name="nome" id="nome" placeholder="Nome">
               <input type="number" name="idade" id="idade" placeholder="Idade" >
               <div class="genero">
               <p>Sexo:</p>
               <input type="radio" id="Masculino" name="genero" value="Masculino"  >
              <label for="Masculino"  >Masculino</label>
              <br>
              <input type="radio" id="Feminino" name="genero" value="Feminino" >
              <label for="Feminino">Feminino</label><br>
              <input type="radio" id="Outros" name="genero" value="Outros"  >
              <label for="Outros"  >Outros</label><br>
              </div>
               <div class="box-desabafo">
               <textarea name="desabafo" placeholder="Digite seu desabafo" required></textarea>
               <input type="submit" name="submit" id="submit">
            </div>
            </form>
         </div>
      </section>

   </main>
</body>
</html>
