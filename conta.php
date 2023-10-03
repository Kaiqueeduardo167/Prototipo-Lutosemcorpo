<?php
session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    header('Location: login.php');
    exit();
}
$login = $_SESSION['email'];

include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $id = $_POST['delete'];

    $deleteComentariosQuery = "DELETE FROM comentarios WHERE relato_id = '$id'";
    mysqli_query($conexao, $deleteComentariosQuery);

    $deleteRelatoQuery = "DELETE FROM relatos WHERE id = '$id' AND email = '$login'";
    mysqli_query($conexao, $deleteRelatoQuery);

    header('Location: conta.php');
    exit();
}

$result = mysqli_query($conexao, "SELECT id, nome, idade, genero, desabafo, datahora FROM relatos WHERE email = '$login'");
$relatos = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="otrossyt.css">
    <title>Conta</title>
</head>

<body>
    <header class="menu"> 
        <a class="titulo" href="indexusuario.php">LUTO SEM CORPO</a>
        <nav class="navmenu">
            <a class="menuitem" href="desa-relatos.php">DESABAFOS</a>
            <a class="menuitem" href="#" target="_blank">SOBRE-NÓS</a>
        </nav>
    </header>

    <section>
        <div class="box-conta">
            <h3>CONFIGURAÇÕES DA CONTA</h3>
            <div class="usuario-conteiner">
                <ul>
                    <li>Dados Pessoais</li>
                    <li>CAIXA DE MENSAGENS</li>
                </ul>

                <div class="conta-usuario">
                    <h1>USUÁRIO</h1>
                    <p><?php echo $login; ?></p>
                    <img class="image-perfil" src="imgs/mystery.jpg">
                    <a id="sair-conta" href="Sair.php">Sair</a>
                </div>
            </div>
        </div>
        <div class="conteiner-desabafos">
            <h3>SEUS DESABAFOS E COMENTÁRIOS</h3>
            <?php foreach ($relatos as $relato) { ?>
                <div class="desabafos">
                    <div class="perfil">
                        <img class="image-perfil" src="imgs/mystery.jpg">
                        <div class="infor-perfil">
                            <ul>
                                <li><h5>Nome: <?php echo $relato['nome']; ?></h5></li>
                                <li><h5>Idade: <?php echo $relato['idade']; ?></h5></li>
                                <li><h5>Gênero: <?php echo $relato['genero']; ?></h5></li>
                                <li><h5>Data e Hora: <?php echo $relato['datahora']; ?></h5></li>
                            </ul>
                        </div>
                    </div>
                    <p><?php echo $relato['desabafo']; ?></p>
                    <h4>Comentários:</h4>
                    <?php
                        $relato_id = $relato['id'];
                        $comentarios_result = mysqli_query($conexao, "SELECT comentario, datahora FROM comentarios WHERE relato_id = '$relato_id'");
                        $comentarios = mysqli_fetch_all($comentarios_result, MYSQLI_ASSOC);
                        foreach ($comentarios as $comentario) {
                            $comentario_texto = $comentario['comentario'];
                            $comentario_datahora = $comentario['datahora'];
                        }  
                    ?>
                    <div class="comentarios">
                            <ul>
                                <li><h5>Comentario: <?php echo $comentario_texto; ?></h5></li>
                                <li><h5>Data e Hora: <?php echo $comentario_datahora; ?></h5></li>
                            </ul>
                        </div>
                    <form method="post" action="conta.php">
                        <input type="hidden" name="delete" value="<?php echo $relato['id']; ?>">
                        <button type="submit">Excluir</button>
                    </form>
                </div>
            <?php } ?>
        </div>
    </section>
</body>

</html>
