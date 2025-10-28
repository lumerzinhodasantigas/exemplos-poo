<?php
class Cliente {
    private string $nome;
    private int $idade;
    private string $email;
    private ?string $telefone = null; 

    public function __construct( 
        string $valorDoNome, 
        int $valorDaIdade, 
        string $valorDoEmail, 
        ?string $valorDoTelefone = null
    ) {
        $this->setNome($valorDoNome);
        $this->idade = $valorDaIdade;
        $this->setEmail($valorDoEmail); // corrigido: valida e-mail corretamente
        $this->telefone = $valorDoTelefone;
    }   

    public function getNome(): string {
        return $this->nome;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function getTelefone(): ?string {
        return $this->telefone;
    }

    /* Métodos setters: permitem acesso de escrita para definir valores de acordo com alguma regra/validação. */
    public function setNome(string $valorDoNome): void {
        // Se nome estiver vazio
        if (empty($valorDoNome)) {

            // Apresentamos uma mensagem alertando
            echo "<p style='color:red'> Nome não pode ser vazio!</p>";

        } else {

            // senão, pegamos o valor do nome e colocamos no atributo de objeto
            $this->nome = $valorDoNome;
        }
    }

    public function setEmail(string $valorDoEmail): void {
        /* Usamos o filter_var com a constante FILTER_VALIDATE_EMAIL
        para o PHP verificar se o valor de e-mail informado é válido.
        Se sim, retorna TRUE. Senão, retorna FALSE. */
        $validaEmail = filter_var($valorDoEmail, FILTER_VALIDATE_EMAIL);

        // Se o e-mail não for válido
        if (!$validaEmail) {
            // Alerta o usuário
            echo "<p style='color:red'> E-mail inválido!</p>";
        } else {
            // Senão, atribui ao atributo
            $this->email = $valorDoEmail;
        }
    } 

    public function setIdade(int $valorIdade):void {
        if($valorIdade < 0){
            echo "<p style='color:red'> Idade não pode ser negativa!</p>";

        }

        $this->idade = $valorDaIdade;
    }
}