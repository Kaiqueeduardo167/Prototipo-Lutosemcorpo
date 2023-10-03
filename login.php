<?php
 session_start();
     
   if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
   {
    include_once('config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];
           
    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1 )
    {
        unset($_SESSION['$email']);
        unset($_SESSION['$senha']);
        header('Location: login.php');
    } 
    else
    { 
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: indexusuario.php');
    }
   }
   else{
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUTO SEM CORPO</title>

</head>

<body>
    <div class="container">
    <div class="Aviso">
        <h3>Bem-vindo(a) ao site "Luto sem corpo"</h3> <br>
        <p>
         Este site é dedicado a explorar o tema sensível do luto sem corpo. Pedimos que você leia atentamente as informações a seguir antes de prosseguir:<br>
    
         1- Sensibilidade e respeito: O luto sem corpo envolve uma situação delicada e      emocionalmente complexa. Por favor, seja respeitoso(a) ao discutir e interagir com o conteúdo deste site.<br>
    
         2- Privacidade e consentimento: Todas as informações compartilhadas neste site são  protegidas por direitos autorais e estão sujeitas às leis de privacidade. É expressamente proibido copiar, reproduzir ou compartilhar qualquer conteúdo sem o consentimento prévio do autor. <br>
    
         3- Comentários e mensagens: Encorajamos a participação construtiva por meio de comentários e mensagens. No entanto, qualquer forma de discurso de ódio, insultos, assédio ou conteúdo inadequado será excluído e o autor poderá ser banido do site.
        </p>
         </div>

    <div class="box">
        <div class="login-box">
        <form action="login.php" method="post">
        <input type="text" name="email" id="email" class="user" placeholder="Email" required>
        <br>
        <input type="password" name="senha" id="senha" class="user" placeholder="Senha" required>
        <input type="submit" name="submit" id="submit">
        </form>
        <br>
        <a href="cadastro.php" target="_blank">Crie uma conta gratuita</a>
        </div>
    </div>
</div>
   


    
</body>

</html>