<?php

include_once 'conectar.php';

    class Disciplina
    {
        private $cod;
        private $nome;

        public function getMat(){
            return $this->cod;
        }

        public function setMat($codd){
            $this->cod= $codd;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($name){
            $this->nome= $name;
        }

       
    function salvarDi()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into disciplina values (?,?)");
            @$sql-> bindParam(1, $this->getMat(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this-> getNome(), PDO::PARAM_STR);


            if($sql->execute() == 1)
            {
                return "Registro salvo com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    function alterarDi()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("select * from disciplina where COD_DISCIPLINA = ?");
            @$sql-> bindParam(1, $this->getMat(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }

        catch(PDOException $exc)
        {
            echo "Erro ao alterar. " . $exc->getMessage();
        }
    }

    function alterarDi2()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("update disciplina set NOME_DISCIPLINA = ? where COD_DISCIPLINA = ?");
            
            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getMat(), PDO::PARAM_STR);
            

            if($sql->execute() == 1)
            {
                return "Registro alterado com sucesso!";
            }
            $this->conn = null;
        }

        catch(PDOException $exc)
        {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    function consultarDi()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("select * from disciplina where NOME_DISCIPLINA like ?");
            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }

        catch(PDOException $exc)
        {
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }

    function exclusaoDi()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("delete from disciplina where cod_disciplina = ?");
            @$sql-> bindParam(1, $this->getMat(), PDO::PARAM_STR);

            if($sql->execute() == 1)
            {
                return "Excluido com sucesso!";
            }
            else
            {
                return "Erro na exclusao !";
            }

            $this->conn = null;
        }
        
        catch(PDOException $exc)
        {
            echo "Erro ao excluir. " . $exc->getMessage();
        }
    }

    function listarDi()
    {
        try
        {
            $this-> conn = new Conectar();

            //select * from <tabela> order by <campo para ordenação dos dados>

            $sql = $this->conn->query("select * from disciplina order by COD_DISCIPLINA");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }

        catch(PDOException $exc)
        {
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }
    }