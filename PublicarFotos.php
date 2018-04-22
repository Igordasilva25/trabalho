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
            include_once './Conexao.php';
            $User = $_SESSION['ID'];
            $query = "Select * FROM `users` WHERE `ID`  = '$User';";
            $Resultado = mysqli_query($conexao, $query);
            $NumeroDeusers = mysqli_num_rows($Resultado);
            $informa = mysqli_fetch_row($Resultado);
            
            if(!isset($_SESSION['ID'])){
                echo '<script type="text/javascript"> location.href="index.php" </script>';
            }
            if(isset($_POST['Enviar'])){
            $Titulo = $_POST['TituloForm'];
            $Foto = $_FILES['FotoForm'];
            $Usuario = $_SESSION['ID'];
            $today = date("Y-m-d");    
            
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $Foto["name"], $ext);
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
            $caminho_imagem = "ImagensSite/". $nome_imagem;
            move_uploaded_file($Foto["tmp_name"], $caminho_imagem);

            $query = "INSERT INTO `fotospublicdas` (`ID`, `NomeDaFoto`, `CaminhodaFoto`, `UsuarioQuePublicou`, `Data`) VALUES (NULL, '$Titulo', '$nome_imagem', $Usuario, '$today');";
            mysqli_query($conexao, $query);
            echo '<script type="text/javascript"> location.href="index.php" </script>';
        }
        ?>
        <header>
            <h1><a href="index.php">Natureza em movimento!</a></h1>
            <nav>
                <a href="FotosUsers.php">Inicio</a> |
                <a href="PublicarFotos.php">Publicar Foto</a> |
                <a href="Sair.php">Sair</a>
            </nav>
        </header>
        <main>
            <section class="eixo">
            <h1>Vamos Publicar sua foto!</h1>
            <h5>Se empogou com alguma foto?  Algo impressionante? Publique!</h5>
            <section id="FotosPublicadas" style="height: 500px;">
                <section class="UsuárioPublicacao">
                    <figure  class="User">
                        <img src="ImagensSite/<?php echo $informa[4]?>">
                        <figcaption class="">
                            <?php echo $informa[1]?> irá publicar uma foto!
                        </figcaption>
                    </figure>
                    <form method="POST"  enctype="multipart/form-data">
                        <label>Titulo foto</label>
                        <input name="TituloForm" type="text" required="" placeholder="Digite seu nome aqui...">
                        <label>Email</label>
                        <label>Foto a ser publicada</label>
                        <input name="FotoForm" type="file" required="" placeholder="Digite seu nome aqui...">
                        <button type="submit" name="Enviar">Enviar Foto</button>
                    </form>
                </section>
            </section>
            </section>
            <footer>
            Website criado e desenvolvido por Saymon, Barbara, Igor e Vitoria.
            </footer>
        </main>
    </body>
</html>
