<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Natureza em movimento!!</title>
        <link href="css/css2.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <h1><a href="index.php">Natureza em movimento!</a></h1>
            <nav>
                <a href="">Inicio</a> |
                <a href="">Publicar Foto</a> |
                <a href="">Sair</a>
            </nav>
        </header>
        <main>
            <section class="eixo">
            <h1>Vamos Publicar sua foto!</h1>
            <h5>Se empogou com alguma foto?  Algo impressionante? Publique!</h5>
            <section id="FotosPublicadas">
                <section class="UsuárioPublicacao">
                    <figure  class="User">
                        <img src="Imagens/images.jpg">
                        <figcaption class="">
                            Saymon Balbino irá publicar uma foto!
                        </figcaption>
                    </figure>
                    <form method="POST">
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
