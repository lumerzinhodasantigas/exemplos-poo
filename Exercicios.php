<?php
    require_once "src/Livro.php";

    $livro1 = new Livro("IT: A coisa", "Stephen King", 23, 1180);
    $livro2 = new Livro("O Iluminado", "Stephen King", 58, 520);
    $livro3 = new Livro("Dexter, A Mão Esquerda de Deus", "Jeff Lindsay", 24, 272);
    $livro4 = new Livro("O Exorcista", "William Peter Blatty", 22, 400);
    $livro5 = new Livro("O Chamado de Cthulhu", "H. P. Lovecraft", 3, 368);
    $livro6 = new Livro("Drácula", "Bram Stoker", 27, 528);

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

    <div class="livro">

        <div class="topo-titulo"><h2><?= $livro1->getTitulo() ?></h2></div>
        <p><strong>Autor:</strong> <?= $livro1->getAutor() ?></p>
        <p><strong>Capítulos:</strong> <?= $livro1->getCapitulo() ?></p>
        <p><strong>Páginas:</strong> <?= $livro1->getPagina() ?? "Não informado" ?></p>

    </div>

    <div class="livro">

        <div class="topo-titulo"><h2><?= $livro2->getTitulo() ?></h2></div>
        <p><strong>Autor:</strong> <?= $livro2->getAutor() ?></p>
        <p><strong>Capítulos:</strong> <?= $livro2->getCapitulo() ?></p>
        <p><strong>Páginas:</strong> <?= $livro2->getPagina() ?? "Não informado" ?></p>

    </div>

    <div class="livro">

        <div class="topo-titulo"><h2><?= $livro3->getTitulo() ?></h2></div>
        <p><strong>Autor:</strong> <?= $livro3->getAutor() ?></p>
        <p><strong>Capítulos:</strong> <?= $livro3->getCapitulo() ?></p>
        <p><strong>Páginas:</strong> <?= $livro3->getPagina() ?? "Não informado" ?></p>

    </div>

    <div class="livro">

        <div class="topo-titulo"><h2><?= $livro4->getTitulo()?></h2></div>
        <p><strong>Autor:</strong> <?= $livro4->getAutor() ?></p>
        <p><strong>Capítulos:</strong> <?= $livro4->getCapitulo() ?></p>
        <p><strong>Páginas:</strong> <?= $livro4->getPagina() ?? "Não informado" ?></p>

    </div>   

    <div class="livro">

        <div class="topo-titulo"><h2><?= $livro5->getTitulo() ?></h2></div>
        <p><strong>Autor:</strong> <?= $livro5->getAutor() ?></p>
        <p><strong>Capítulos:</strong> <?= $livro5->getCapitulo() ?></p>
        <p><strong>Páginas:</strong> <?= $livro5->getPagina() ?? "Não informado" ?></p>

    </div>

    <div class="livro">

        <div class="topo-titulo"><h2><?= $livro6->getTitulo()?></h2></div>
        <p><strong>Autor:</strong> <?= $livro6->getAutor() ?></p>
        <p><strong>Capítulos:</strong> <?= $livro6->getCapitulo() ?></p>
        <p><strong>Páginas:</strong> <?= $livro6->getPagina() ?? "Não informado" ?></p>

    </div>

</section>


</body>
</html>