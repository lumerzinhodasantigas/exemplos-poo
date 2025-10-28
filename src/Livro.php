<?php
class Livro {
    private string $titulo;
    private string $autor;
    private int $capitulo;
    private ?int $pagina = null; 

    public function __construct( 
        string $valorDoTitulo, 
        string $valorDoAutor, 
        int $valorDoCapitulo, 
        ?int $valorDaPagina = null
    ) {
        
        $this->setTitulo($valorDoTitulo);
        $this->autor = $valorDoAutor;
        $this->capitulo = $valorDoCapitulo;
        $this->setPagina($valorDaPagina);

    }

    public function verificarTitulo(){
    if (strlen($this->titulo) < 3) {

        echo "<p style='color:red;'>Título não pode ter menos de 3 letras.</p>";

    } 
}

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getAutor(): string {
        return $this->autor;
    }

    public function getCapitulo(): int {
        return $this->capitulo;
    }

    public function getPagina(): ?int {
        return $this->pagina;
    }

    public function setTitulo(string $valorDoTitulo): void {
        if (empty($valorDoTitulo)) {

            echo "<p style ='color: red'> Título não pode ser vazio!</p>";
            $this->titulo = "Título indefinido";

        } else {

            $this->titulo = $valorDoTitulo;
        }
    }

    public function setPagina(?int $valorDaPagina): void {
        if (is_null($valorDaPagina)) {

            echo "<p style ='color: red'> Número de páginas indefinido </p>"; 


        } elseif ($valorDaPagina <= 0) {

            echo "<p style ='color: red'> O número de páginas não pode ser menor que ou igual a zero  </p>"; 
            
        } else{

            $this->pagina = $valorDaPagina;

        }
    }

}
