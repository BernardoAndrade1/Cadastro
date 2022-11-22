<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    echo "<body style='background-color:#014b78'>";

    <body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-white">Sistema de Cadastro</h3>
                    <h3 class="title has-text-primary"><a href="https://www5.uva.br/PortalAluno/Default.aspx" target="_blank">Portal UVA</a></h3>
                    <div class="notification is-success">
                      <p>Logado com sucesso.</p>
                      <p>Bem vindo a Universidade Veiga de Almeida.</a>.</p>
                    </div>
                    <div class="box">
                         <h2>Olá, <?php echo $_SESSION['nome'];?></h2>
                         <h2><a href="logout.php">Sair</a></h2> 
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>