<?php
class Cliente {
    public string $nome;
    public int $idade;
    public string $email;

    /* Método Construtor: */
    public function __construct( 
        string $valorDoNome, int $valorDaIdade, string $valorDoEmail ) {
        
            $this->nome = $valorDoNome;
            $this->idade = $valorDaIdade;
            $this->email = $valorDoEmail;

    }
}
