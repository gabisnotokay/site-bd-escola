<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset = "utf-8">

            <title>Manutenção Produtos</title>
            
            <link rel="stylesheet" href="./_css/main.css"> 
        </head> 

    <style>
        form
        {
            margin-top: 200px;
            width: 500px;

        }

        fieldset#a{
            width: 450px;
        }

        fieldset#b{
            width: 450px;
        }
    
    </style>



    <!-- Começo do Menu -->

    <body>
            
            <!-- Menu-Principal -->
            <header>
                    <div class="logo">
                        <a href="index.html">
                        <img src="_img/logo.png" />
                        </a>
                    </div>
        <br>
        <br>
        <br>
    
        <nav>      
            <ul class = "nav-list">
                <li><a class="active" href="index.html">PRINCIPAL</a></li>

                <li>
                    <a href="#">CADASTRAR</a>
                    <ul>
                        <li><a href="cadastraral.php">ALUNOS</a></li>
                        <li><a href="cadastrardi.php">DISCIPLINAS</a></li>
                        <li><a href="cadastrarcur.php">CURSOS</a></li>
                    </ul>
                </li>

                <li><a class="active" href="">EXCLUIR</a></li>

                <li><a class="active" href="">PESQUISAR</a></li>

                <li>
                    <a href="#">LISTAR</a>
                    <ul>
                        <li><a href="listaral.php">ALUNOS</a></li>
                        <li><a href="listardi.php">DISCIPLINAS</a></li>
                        <li><a href="listarcur.php">CURSOS</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">ALTERAR</a>
                    <ul>
                        <li><a href="alteraralu1.php">ALUNOS</a></li>
                        <li><a href="alterardi1.php">DISCIPLINAS</a></li>
                        <li><a href="alterarcur1.php">CURSOS</a></li>
                    </ul>
                </li>
        </nav>

    <!-- Fim-Menu-Principal -->

    <!-- Começo Form -->

    <center>
        
        <font face="Century Gothic" size="3"><b>



        <fieldset>

            <legend><b> Alterar </b></legend>

            <?php
                $txtmat=$_POST["txtmat"];
                include_once 'alunos.php';
                $a = new Alunos();
                $a -> setMat($txtmat);
                $alu_bd = $a->alterarAl();
            ?>

            <br><form name = "escola" method = "POST" action = "">

            <?php

                foreach($alu_bd as $alu_mostrar)
                {
            ?>

            <input type = "hidden" name = "txtmat" size = "5" value='<?php echo $alu_mostrar[0] ?>'>
                <b> <?php echo "Matrícula:" . $alu_mostrar[0]; ?></b>

            <br><br> <b> <?php echo "Nome: ";?></b>
            <input type = "text" name = "txtnome" size = "25" value='<?php echo $alu_mostrar[1] ?>'>

            <br><br> <b> <?php echo "Endereço: ";?></b>
            <input type = "text" name = "txtend" size = "10" value='<?php echo $alu_mostrar[2] ?>'>

            <br><br> <b> <?php echo "Cidade: ";?></b>
            <input type = "text" name = "txtcid" size = "10" value='<?php echo $alu_mostrar[3] ?>'>

            <br><br> <b> <?php echo "Codigo do Curso: ";?></b>
            <input type = "text" name = "txtcod" size = "10" value='<?php echo $alu_mostrar[4] ?>'>

            <br><br><br><center>

            <input name = "btnalterar" type = "submit" value = "Alterar" >
            <?php
            }

            ?>


        </fieldset>

        </form>

        <?php
            extract ($_POST, EXTR_OVERWRITE);
            if(isset($btnalterar))
            {
                include_once 'alunos.php';
                $alu = new Alunos();
                $alu->setMat($txtmat);
                $alu->setNome($txtnome);
                $alu->setEndereco($txtend);
                $alu->setCidade($txtcid);
                $alu->setCurso($txtcod);
                echo "<br><br><h3>" . $alu->alterarAl2() . "</h3>";   
                header("location:alteraralu1.php");  
            }
        ?>

        <center> 
            <br><br><br><br>

        <button><a href = 'index.html'> Voltar </a></button>
    </body>
</html> 