<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Natureza em movimento!!</title>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            session_start();
            if(isset($_SESSION['ID'])){
                echo '<script type="text/javascript"> location.href="FotosUsers.php" </script>';
            }
            if(isset($_POST['Enviar'])){
                include_once './Conexao.php';
                $Email = $_POST['EmailForm'];
                $Senha = $_POST['SenhaForm'];
                $SenhaFinal = sha1($Senha);
                
                $query = "Select * FROM `users` WHERE `Email`  = '$Email' AND `Senha` = '$SenhaFinal';";
                $Resultado = mysqli_query($conexao, $query);
                $NumeroDeusers = mysqli_num_rows($Resultado);
                
                if($NumeroDeusers == 1){
                   $informa = mysqli_fetch_row($Resultado);
                   $_SESSION['ID'] = $informa[0];
                   echo '<script type="text/javascript"> location.href="FotosUsers.php" </script>';
                }
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
            <section class="fundo" style="height: 300px;">
                <h1>Login</h1>
            <section class="eixo">
                <form method="POST">
                    <label>Email</label>
                    <input name="EmailForm" type="email" required="" placeholder="Digite seu email aqui...">
                    <label>Senha</label>
                    <input name="SenhaForm" type="password" required="" placeholder="Digite sua senha aqui...">
                    <button type="submit" name="Enviar">Logar Usuário</button>
                </form>
            </section>
            </section>
        </main>
        <footer>
            Website criado e desenvolvido por Saymon, Barbara, Igor e Vitoria.
        </footer>
    </body>
</html>
