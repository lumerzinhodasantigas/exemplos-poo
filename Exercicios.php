<?php
    require_once "src/Livro.php";

    $livro1 = new Livro();
    $livro2 = new Livro();
    $livro3 = new Livro();
    $livro4 = new Livro();
    $livro5 = new Livro();
    $livro6 = new Livro();

    $livro1->titulo = "IT: A Coisa";
    $livro1->autor = "Stephen King";
    $livro1->paginas = 1104;
    $livro1->capitulos = 23;

    $livro2->titulo = "O Iluminado";
    $livro2->autor = "Stephen King";
    $livro2->paginas = 520;
    $livro2->capitulos = 58;

    $livro3->titulo = "Dexter, A Mão Esquerda de Deus";
    $livro3->autor = "Jeff Lindsay";
    $livro3->paginas = 272;
    $livro3->capitulos = 24;

    $livro4->titulo = "O Exorcita";
    $livro4->autor = "William Peter Blatty";
    $livro4->paginas = 400;
    $livro4->capitulos = 22;

    $livro5->titulo = "O Chamado de Cthulhu";
    $livro5->autor = "H. P. Lovecraft";
    $livro5->paginas = 368;
    $livro5->capitulos = 3;

    $livro6->titulo = "Drácula";
    $livro6->autor = "Bram Stoker";
    $livro6->paginas = 528;
    $livro6->capitulos = 27;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <header id="cabecalho">
        <h1 id="titulo_principal"> 
            Livros Disponíveis 
        </h1>
    </header>

    <section id="secao-livros">

    <div class="livros">
        <?=$livro1->mostrarDados()?>
    </div>

    <div class="livros">
        <?=$livro2->mostrarDados()?>
    </div>

    <div class="livros">
        <?=$livro3->mostrarDados()?>
    </div>

    <div class="livros">
        <?=$livro4->mostrarDados()?>
    </div>

    <div class="livros">
        <?=$livro5->mostrarDados()?>
    </div>

    <div class="livros">
        <?=$livro6->mostrarDados()?>
    </div>

    </section>
</body>
</html>