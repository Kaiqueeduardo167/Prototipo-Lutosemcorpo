 <?php 
 if(isset($_POST['submit']))
     {
        include_once('config.php');

        $nome = $_POST['Nome'];
        $email = $_POST['Email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data-nascimento'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(Nome,Email,senha,telefone,sexo,data_nasc) VALUES ('$nome','$email','$senha','$telefone','$sexo','$data_nasc')");

        header('Location: login.php');

     }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CADASTRO</title>
</head>

<body>

    <div class="box">
    <form action="cadastro.php" class="login" method="post" >
         <fieldset>
            <legend><B>USUARIO</B></legend>
            <br><br>
            <div class="login-conteiner">
                <input type="text" name="Nome" placeholder="Nome Completo" class="InputUser" required>
                <label for="nome" class="text-label" >Nome Completo</label>
            </div>
            <br>
            <div class="login-conteiner">
                <input type="email" name="Email" placeholder="Email" class="InputUser" required>
                <label for="email" class="text-label" >Email</label>
            </div>
            <br>
            <div class="login-conteiner">
                <input type="password" name="senha" id="senha" placeholder="Senha" class="InputUser" required>
                <label for="senha" class="text-label" >Senha</label>
            </div>
            <br>
            <div class="login-conteiner">
                <input type="tel" name="telefone" id="telefone" placeholder="Telefone" class="InputUser" required>
                <label for="telefone" class="text-label" >Telefone</label>
            </div>
            <div class="sexo">
            <p>Sexo:</p>
            <input type="radio" id="Masculino" name="genero" value="Masculino"  required>
            <label for="Masculino"  >Masculino</label>
            <br>
            <input type="radio" id="Feminino" name="genero" value="Feminino"  required>
            <label for="Feminino">Feminino</label><br>
            <input type="radio" id="Outros" name="genero" value="Outros"  required>
            <label for="Outros"  >Outros</label><br>
            </div>
            <div class="login-conteiner">   
            <label for="data-nascimento" >Data de Nascimento:</label>
            <input type="date" name="data-nascimento" id="data-nascimento" required>
            </div>
            <input type="submit" name="submit" id="submit">
         </fieldset>
    </form>
    </div> 



</body>

</html>