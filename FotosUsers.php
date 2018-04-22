<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Natureza em movimento!!</title>
        <link href="css/css2.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            session_start();
            if(!isset($_SESSION['ID'])){
                echo '<script type="text/javascript"> location.href="index.php" </script>';
            }
        ?>
        <header>
            <h1><a href="index.php">Natureza em movimento!</a></h1>
            <nav>
                <a href="index.php">Inicio</a> |
                <a href="PublicarFotos.php">Publicar Foto</a> |
                <a href="Sair.php">Sair</a>
            </nav>
        </header>
        <main>
            <section class="eixo">
            <h1>Seja Bem Vindo(a) ao natureza em movimento!</h1>
            <h5>Aqui você pode publicar fotos lindas sobre essa natureza que rodeia nosso planeta</h5>
            <section id="FotosPublicadas">
                <?php
                include_once './Conexao.php';
                $query = "Select * FROM `fotospublicdas` ORDER BY `ID` DESC";
                $Resultado = mysqli_query($conexao, $query);
                $NumeroDeusers = mysqli_num_rows($Resultado);
                for($i = 0; $i < $NumeroDeusers;$i++){
                    $informa = mysqli_fetch_row($Resultado);
                    $IDF = $informa[3];
                    $query2 = "Select * FROM `users` where `ID` = '$IDF'" ;
                    $Resultado2 = mysqli_query($conexao, $query2);
                    $NumeroDeusers2 = mysqli_num_rows($Resultado2);
                    $informa2 = mysqli_fetch_row($Resultado2);
                ?>
                <section class="UsuárioPublicacao">
                    <figure  class="User">
                        <img src="ImagensSite/<?php echo $informa2[4]?>">
                        <figcaption class="">
                            Publicado por: <?php echo $informa2[1]?> | Titulo: <?php echo $informa[1]?>!
                        </figcaption>
                    </figure>
                    <figure class="Foto">
                        <img src="ImagensSite/<?php echo $informa[2]?>">
                    </figure>
                </section>
                <?php 
                }
                ?>
            </section>
            </section>
            <footer>
            Website criado e desenvolvido por Saymon, Barbara, Igor e Vitoria.
            </footer>
        </main>
    </body>
</html>
