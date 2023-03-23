<?php

include_once 'conectar.php';

    class Alunos
    {
        private $mat;
        private $nome;
        private $endereco;
        private $cidade;
        private $curso;

        public function getMat(){
            return $this->mat;
        }

        public function setMat($matt){
            $this->mat= $matt;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($name){
            $this->nome= $name;
        }

        public function getEndereco() {
            return $this->endereco;
        }

        public function setEndereco($enderec){
            $this->endereco= $enderec;
        }
        
        public function getCidade() {
            return $this->cid;
        }

        public function setCidade($cidd){
            $this->cid= $cidd;
        }

        public function getCurso() {
            return $this->curso;
        }

        public function setCurso($curs){
            $this->curso= $curs;
        }

    function salvarAl()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into alunos values (?,?,?,?,?)");
            @$sql-> bindParam(1, $this->getMat(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this-> getNome(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getEndereco(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this-> getCidade(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this-> getCurso(), PDO::PARAM_STR);

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

    function alterarAl()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("select * from alunos where MATRICULA = ?");
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

    function alterarAl2()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("update alunos set NOME = ?, ENDERECO = ?, CIDADE = ?,  COD_CURSO = ? where MATRICULA = ?");

            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getEndereco(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getCidade(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getCurso(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this->getMat(), PDO::PARAM_STR);
    

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

    function consultarAl()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("select * from alunos where nome like ?");
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

    function exclusaoAl()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("delete from alunos where matricula = ?");
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

    function listarAl()
    {
        try
        {
            $this-> conn = new Conectar();

            //select * from <tabela> order by <campo para ordenação dos dados>

            $sql = $this->conn->query("select * from alunos order by MATRICULA");
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