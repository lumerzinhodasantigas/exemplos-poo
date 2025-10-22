<?php
class Livro {
    public string $titulo;
    public string $autor;
    public int $capitulos;
    public ?int $pagina; 

    public function __construct( 
        string $valorDoTitulo, 
        string $valorDoAutor, 
        int $valorDoCapitulo, 
        ?int $valorDaPagina = null
    ) {
        
        $this->titulo = $valorDoTitulo;
        $this->autor = $valorDoAutor;
        $this->capitulos = $valorDoCapitulo;
        $this->pagina = $valorDaPagina;

    }

    public function verificarTitulo() {
        if (strlen($this->titulo) < 3) {
            echo "<p style='color:red;'>Título não pode ter menos de 3 letras.</p>";
        }
        
    }
}
