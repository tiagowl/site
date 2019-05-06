<?php

class Usuario{
    public $id;
    public $nome;
    public $email;
    public $senha;

    public static function logar($email, $senha){
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_games";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT id, nome FROM usuarios
        WHERE senha = '".$senha."' AND email = '".$email."'";

        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)) {
            $usuario = new Usuario();
            $usuario->id = $row['id'];
            $usuario->nome = $row['nome'];
            return $usuario;
        }
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
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of senha
     */ 
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */ 
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }
}

?>