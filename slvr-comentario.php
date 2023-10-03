<?php
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $relato_id = $_POST['relato_id'];
    $email = $_POST['email']; 
    $comentario = $_POST['comentario'];

    $stmt = $conexao->prepare("INSERT INTO comentarios (relato_id, email, comentario, datahora) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("iss", $relato_id, $email, $comentario);

    if ($stmt->execute()) {
        header('Location: pagina_sucesso.php'); 
    } else {
        echo "Erro ao inserir comentário.";
    }

    $stmt->close();
}

$conexao->close();
?>

