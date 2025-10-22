<?php
    require_once "src/Livro.php";

    $livro1 = new Livro("IT: A Coisa", "Stephen King", 23 );
    $livro2 = new Livro("O Iluminado", "Stephen King", 58);
    $livro3 = new Livro("Dexter, A Mão Esquerda de Deus", "Jeff Lindsay", 24);
    $livro4 = new Livro("O Exorcista", "William Peter Blatty", 22, "400");
    $livro5 = new Livro("O Chamado de Cthulhu", "H. P. Lovecraft", 3, "368");
    $livro6 = new Livro("Drácula", "Bram Stoker", 27, "528");

    /*
    $livro1->paginas = 1104;
    $livro2->paginas = 520;
    $livro3->paginas = 272; 
    */
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

        <div class="topo-titulo"><h2><?= $livro1->titulo ?></h2></div>
        <p><strong>Autor:</strong> <?= $livro1->autor ?></p>
        <p><strong>Capítulos:</strong> <?= $livro1->capitulos ?></p>
        <p><strong>Páginas:</strong> <?= $livro1->pagina ?? "Não informado" ?></p>

    </div>

    <div class="livro">

        <div class="topo-titulo"><h2><?= $livro2->titulo ?></h2></div>
        <p><strong>Autor:</strong> <?= $livro2->autor ?></p>
        <p><strong>Capítulos:</strong> <?= $livro2->capitulos ?></p>
        <p><strong>Páginas:</strong> <?= $livro2->pagina ?? "Não informado" ?></p>

    </div>

    <div class="livro">

        <div class="topo-titulo"><h2><?= $livro3->titulo ?></h2></div>
        <p><strong>Autor:</strong> <?= $livro3->autor ?></p>
        <p><strong>Capítulos:</strong> <?= $livro3->capitulos ?></p>
        <p><strong>Páginas:</strong> <?= $livro3->pagina ?? "Não informado" ?></p>

    </div>

    <div class="livro">

        <div class="topo-titulo"><h2><?= $livro4->titulo?></h2></div>
        <p><strong>Autor:</strong> <?= $livro4->autor ?></p>
        <p><strong>Capítulos:</strong> <?= $livro4->capitulos ?></p>
        <p><strong>Páginas:</strong> <?= $livro4->pagina ?? "Não informado" ?></p>

    </div>   

    <div class="livro">

        <div class="topo-titulo"><h2><?= $livro5->titulo ?></h2></div>
        <p><strong>Autor:</strong> <?= $livro5->autor ?></p>
        <p><strong>Capítulos:</strong> <?= $livro5->capitulos ?></p>
        <p><strong>Páginas:</strong> <?= $livro5->pagina ?? "Não informado" ?></p>

    </div>

    <div class="livro">

        <div class="topo-titulo"><h2><?= $livro6->titulo?></h2></div>
        <p><strong>Autor:</strong> <?= $livro6->autor ?></p>
        <p><strong>Capítulos:</strong> <?= $livro6->capitulos ?></p>
        <p><strong>Páginas:</strong> <?= $livro6->pagina ?? "Não informado" ?></p>

    </div>

</section>


</body>
</html>