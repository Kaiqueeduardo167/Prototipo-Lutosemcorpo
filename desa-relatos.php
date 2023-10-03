<?php
include_once('config.php');

$result = mysqli_query($conexao, "SELECT id, nome, idade, genero, desabafo, datahora FROM relatos");
$relatos = mysqli_fetch_all($result, MYSQLI_ASSOC);

session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$login = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="perg.css">
    <title>PERGUNTAS</title>
    <script src="Javascript/perg.js" defer></script>
    <script src="https://kit.fontawesome.com/5bae496e86.js" crossorigin="anonymous"></script>
</head>

<body>

    <header class="menu">
        <a class="titulo" href="indexusuario.php">LUTO SEM CORPO</a>
        <nav class="navmenu">
            <a class="menuitem" href="desabafar.php"> Compartilhar seu Relato</a>
            <a class="menuitem" href="#" target="_blank">SOBRE-NÓS</a>
            <a class="menuitem" href="conta.php">CONTA</a>
        </nav>
    </header>

    <main class="conteudo">

        <section class="desabafos-conteiner">
            <?php
            foreach ($relatos as $relato) {
                $relato_id = $relato['id'];
                $nome = $relato['nome'];
                $idade = $relato['idade'];
                $genero = $relato['genero'];
                $desabafo = $relato['desabafo'];
                $datahora = $relato['datahora'];
            ?>
                <div class="desabafos">
                    <div class="perfil">
                        <img src="imgs/mystery.jpg">
                        <ul>
                            <li><h5>Nome: <?php echo $nome; ?></h5></li>
                            <li><h5$comentario_texto = $comentario['comentario'];
                        $comentario_datahora = $comentario['datahora'];>Idade: <?php echo $idade; ?></h5></li>
                            <li><h5>Gênero: <?php echo $genero; ?></h5></li>
                            <li><h5>Data e Hora: <?php echo $datahora; ?></h5></li>
                        </ul>
                    </div>
                    <p>
                        <?php echo $desabafo; ?>
                    </p>

                    <form method="post" action="slvr-comentario.php">
                    <input type="hidden" name="relato_id" value="<?php echo $relato_id; ?>">
                    <input type="hidden" name="email" value="<?php echo $login; ?>">
                    <textarea name="comentario" placeholder="Deixe seu comentário"></textarea>
                    <button type="submit">Comentar</button>
                    </form>

                    <?php
                    $comentarios_result = mysqli_query($conexao, "SELECT email, comentario, datahora FROM comentarios WHERE relato_id = $relato_id");
                    $comentarios = mysqli_fetch_all($comentarios_result, MYSQLI_ASSOC);
                    foreach ($comentarios as $comentario) {
                    $email_do_comentario = $comentario['email'];
                    $comentario_texto = $comentario['comentario'];
                    $comentario_datahora = $comentario['datahora'];
                    ?>
    <div class="comentarios">
        <ul>
            <li><h5>Email: <?php echo $email_do_comentario; ?></h5></li>
            <li><h5>Comentário: <?php echo $comentario_texto; ?></h5></li>
            <li><h5>Data e Hora: <?php echo $comentario_datahora; ?></h5></li>
        </ul>
    </div>
<?php } ?>

                </div>
            <?php } ?>
        </section>

    </main>
    <script src="https://kit.fontawesome.com/5bae496e86.js" crossorigin="anonymous"></script>
</body>

</html>
