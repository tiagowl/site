<?php

class Game{
    public $id;
    public $nome;
    public $console;
    public $categoria;
    public $preco;
    public $desenvolvedora;
    public $imagem;
    public $descricao;


    public static function getProdutoById($id){
        $sql = "SELECT * FROM games WHERE id = ".$id;

        $servername = "localhost";
               $username = "root";
               $password = "";
               $dbname = "db_games";
               // Create connection
               $conn = new mysqli($servername, $username, $password, $dbname);
               $sql = 'SELECT * from games';

               $result = mysqli_query($conn, $sql);

               $row = mysqli_fetch_assoc($result);

               $game = new Game();
               $game->id = $row['id'];
               $game->nome = $row['nome'];
               $game->console = $row['console'];
               $game->categoria = $row['categoria'];
               $game->preco = $row['preco'];
               $game->desenvolvedora = $row['desenvolvedora'];

               return $game;

               
    }
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of console
     */ 
    public function getConsole()
    {
        return $this->console;
    }

    /**
     * Set the value of console
     *
     * @return  self
     */ 
    public function setConsole($console)
    {
        $this->console = $console;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of preco
     */ 
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @return  self
     */ 
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    

    /**
     * Get the value of imagem
     */ 
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     *
     * @return  self
     */ 
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }
}

?>