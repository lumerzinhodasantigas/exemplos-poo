<?php

class Livro {

    public string $titulo;
    public string $autor;
    public int $paginas;
    public int $capitulos;
    
    public function mostrarDados():void { // <p><b> </b></p>
        echo " <div>
                    <h4> $this->titulo </h4>
                    <p><b>Autor: </b> $this->autor </p>
                    <p><b>Páginas: </b> $this->paginas </p>
                    <p><b>Capítulos: </b> $this->capitulos </p> 
                </div> ";
        }

}
?>
