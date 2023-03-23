<?php
include_once 'conectar.php';

class Usuario
{
    private $usu;
    private $senha;
    private $conn;

    public function getMat()
    {
        return $this->mat;
    }
    public function setMat($matri)
    {
        $this->mat = $matri;
    }

    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    function logar()
    {
        try
        {
            $this-> conn = New Conectar();
            $sql = $this->conn->prepare("SELECT * FROM usuario WHERE matricula LIKE ? and senha = ?");
            @$sql-> bindParam(1, $this->getMat(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getSenha(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "<span class='text-green-200'>Erro ao executar consulta.</span>". $exc->getMessage();    
        }
    }
}
