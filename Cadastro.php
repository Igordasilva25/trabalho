<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Natureza em movimento!!</title>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        if(isset($_POST['Enviar'])){
            include_once './Conexao.php';
            $Nome = $_POST['NomeForm'];
            $Email = $_POST['EmailForm'];
            $Senha = $_POST['SenhaForm'];
            $Foto = $_FILES['FotoForm'];
            
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $Foto["name"], $ext);
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
            $caminho_imagem = "ImagensSite/". $nome_imagem;
            move_uploaded_file($Foto["tmp_name"], $caminho_imagem);
            $SenhaFinal = sha1($Senha);

           //Agora após as validaçã, iremos registrar o usuario no BD.
           $query = "INSERT INTO `users` (`ID`, `Nome`, `Email`, `Senha`, `Foto`) VALUES (NULL, '$Nome', '$Email', '$SenhaFinal', '$nome_imagem');";
           mysqli_query($conexao, $query);
           echo '<script type="text/javascript"> location.href="Login.php" </script>';
        }
        ?>
        <header>
            <h1><a href="index.php">Natureza em movimento!</a></h1>
            <nav>
                <a href="Login.php">Login</a> |
                <a href="Cadastro.php">Cadastro</a>
            </nav>
        </header>
        <section id="Banner">
            
        </section>
        <main>
            <section class="fundo" style="height: 500px;">
                <h1>Cadastrar</h1>
            <section class="eixo">
                <form method="POST" enctype="multipart/form-data">
                    <label>Nome Completo</label>
                    <input name="NomeForm" type="text" required="" placeholder="Digite seu nome aqui...">
                    <label>Email</label>
                    <input name="EmailForm" type="email" required="" placeholder="Digite seu email aqui...">
                    <label>Senha</label>
                    <input name="SenhaForm" type="password" required="" placeholder="Digite sua senha aqui...">
                    <label>Foto de perfil</label>
                    <input name="FotoForm" type="file" required="" placeholder="Digite seu nome aqui...">
                    <button type="submit" name="Enviar">Cadastrar Usuário</button>
                </form>
            </section>
            </section>
        </main>
        <footer>
            Website criado e desenvolvido por Saymon, Barbara, Igor e Vitoria.
        </footer>
    </body>
</html>
