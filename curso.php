<?php

include_once 'conectar.php';

    class Curso
    {
        private $codigo;
        private $nome;
        private $cod1;
        private $cod2;
        private $cod3;
        private $conn;

        public function getCodigo(){
            return $this->cod;
        }

        public function setCodigo($codig){
            $this->cod= $codig;
        }


        public function getNome(){
            return $this->nome;
        }

        public function setNome($name){
            $this->nome= $name;
        }

        
        public function getCod1(){
            return $this->cod1;
        }

        public function setCod1($codd1){
            $this->cod1= $codd1;
        }

        public function getCod2(){
            return $this->cod2;
        }

        public function setCod2($codd2){
            $this->cod2= $codd2;
        }

        public function getCod3(){
            return $this->cod3;
        }

        public function setCod3($codd3){
            $this->cod3= $codd3;
        }

       
    function salvarCur()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into cursos values (?,?,?,?,?)");
            @$sql-> bindParam(1, $this-> getCodigo(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this-> getNome(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this-> getCod1(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this-> getCod2(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this-> getCod3(), PDO::PARAM_STR);


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

    function alterarCur()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("select * from cursos where COD_CURSO = ?");
            @$sql-> bindParam(1, $this->getCodigo(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }

        catch(PDOException $exc)
        {
            echo "Erro ao alterar. " . $exc->getMessage();
        }
    }

    function alterarCur2()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("update cursos set NOME = ?, CODDISC1 = ?, CODDISC2 = ?,  CODDISC3 = ? where COD_CURSO = ?");
            
            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getCod1(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getCod2(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getCod3(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this->getCodigo(), PDO::PARAM_STR);
    

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

    function consultarCur()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("select * from cursos where nome like ?");
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

    function exclusaoCur()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("delete from cursos where cod_curso = ?");
            @$sql-> bindParam(1, $this->getCodigo(), PDO::PARAM_STR);

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

    function listarCur()
    {
        try
        {
            $this-> conn = new Conectar();

            //select * from <tabela> order by <campo para ordenação dos dados>

            $sql = $this->conn->query("select * from cursos order by COD_CURSO");
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