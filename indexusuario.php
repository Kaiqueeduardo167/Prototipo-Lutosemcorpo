<?php
   session_start();
   if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
   {
    unset($_SESSION['$email)']);
    unset($_SESSION['$senha)']);
    header('Location: login.php');
   }
   $login = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="otrossyt.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUTO SEM CORPO</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajaxlibs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=PT+Sans+Narrow&display=swap" rel="stylesheet">
</head>

<body> 

    <header class="menu"> 
        <a class="titulo" href="indexusuario.php">LUTO SEM CORPO</a>
          <nav class="navmenu">
            <a class="menuitem" href="desa-relatos.php">DESABAFOS</a>
            <a class="menuitem" hresf="#">SOBRE-NÓS</a>
            <a class="menuitem" href="conta.php" >CONTA</a>
           </nav>
    </header>

    <main class="conteudo">
            
          <section class="intro">  
               <img class="img-luto" srcset="imgs/IMG-20230905-WA0015.jpg" alt="">
               <p class="intro-text">
               O objetivo do site é acolher e ajudar pessoas em fase de luto que não conseguiram se despedir dos seus entes queridos. Incentivar as vítimas do luto a buscar uma melhor forma de lidar com os seus sentimentos após a perca fazer as vítimas perceberem que elas não são as únicas a passarem por essa situação informar as vítimas do luto sem corpo sobre os seus direitos e obrigações legais.
            </section>
            
            <h2 class="in-luto" >MAIS INFORMAÇÕES SOBRE O QUE É O LUTO E SEUS DIREITOS</h2>
            
            <section class="mais-informações">
                    <div class="ft1">
                            <img class="ftoto" src="imgs/estagiosluto.png" alt="">
                            <p class="fot-texto">
                            1. Negação: Rejeição inicial da realidade da perda, com a pessoa se recusando a acreditar ou aceitar a morte de alguém amado. <br>
                            2. Raiva: Sentimentos intensos de raiva, angústia, desespero e culpa, levando a condutas ríspidas e agressivas como reação à perda. <br>
                            3. Barganha: Tentativas de negociação para aliviar a dor, envolvendo pensamentos de "e se" e busca por soluções impossíveis.<br>
                            4. Depressão: Profundo sofrimento e tristeza prolongados, com a pessoa se apegando à dor como forma de manter-se em um estado depressivo.<br>
                            5. Aceitação: Compreensão da nova realidade marcada pela ausência da pessoa falecida, resultando em uma sensação de paz interior.<br>
                        </p>
                        </div>
    
                    <div class="ft1">
                            <img class="ftoto" src="imgs/AUTO CUIDADO.png" alt="">
                            <p class="fot-texto">
                                1. Expressão emocional: Permita-se sentir e expressar suas emoções de forma saudável.<br>
                                2. Cuidados físicos: Mantenha uma alimentação equilibrada, descanse adequadamente e pratique exercícios.<br>
                                3. Estabelecer limites: Saiba dizer "não" quando necessário e estabeleça limites saudáveis com os outros.<br>
                                4. Autocuidado emocional: Dedique tempo para atividades que tragam conforto emocional, como meditação, ioga ou hobbies.<br>
                                5. Buscar apoio e conexão: Procure apoio em grupos de apoio, terapia ou compartilhe sua experiência com pessoas próximas.<br>
                            </p>
                        </div>
            
                    <div class="ft1">
                            <img class="ftoto" src="" alt="">
                            <p class="fot-texto">
                                Declaração de Morte Presumida:

                                Em alguns lugares, é possível obter uma declaração de morte presumida quando a pessoa está desaparecida e há evidências de seu falecimento, permitindo procedimentos legais. <br>

                                Questões de Herança e Propriedade:
                                
                                A ausência do corpo pode levar à distribuição dos bens e ativos do desaparecido de acordo com as leis de sucessão.<br>

                                Processos de Tutela e Custódia:

                                Em caso de filhos menores, pode ser necessário determinar a tutela ou custódia através de processos legais.<br>

                                Questões de Seguro:
                                
                                Benefícios de seguros podem exigir provas de morte, complicando o processo devido à falta de corpo.<br>

                                Investigações e Encerramento:
                                
                                A falta de corpo pode dificultar investigações criminais e emocionalmente atrasar o processo de luto.
                                Acesso a Documentos Legais:
                                
                                Ter acesso aos documentos do desaparecido pode ser necessário e pode exigir procedimentos legais.
                            </p>
                        </div>
                
            </section>


    </main>
    
</body>
</html>