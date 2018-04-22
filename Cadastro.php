<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Natureza em movimento!!</title>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
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
                <form method="POST">
                    <label>Nome Completo</label>
                    <input name="NomeForm" type="text" required="" placeholder="Digite seu nome aqui...">
                    <label>Email</label>
                    <input name="EmaileForm" type="email" required="" placeholder="Digite seu email aqui...">
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
