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
                include_once 'disciplina.php';
                $d = new Disciplina();
                $d -> setMat($txtmat);
                $di_bd = $d->alterarDi();
            ?>

            <br><form name = "cliente" method = "POST" action = "">

            <?php

                foreach($di_bd as $di_mostrar)
                {
            ?>

            <input type = "hidden" name = "txtmat" size = "5" value='<?php echo $di_mostrar[0] ?>'>
                <b> <?php echo "Matrícula:" . $di_mostrar[0]; ?></b>

            <br><br> <b> <?php echo "Nome: ";?></b>
            <input type = "text" name = "txtnome" size = "25" value='<?php echo $di_mostrar[1] ?>'>


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
                include_once 'disciplina.php';
                $di = new Disciplina();
                $di->setMat($txtmat);
                $di->setNome($txtnome);
                echo "<br><br><h3>" . $di->alterarDi() . "</h3>";   
                header("location:alterardi1.php");  
            }
        ?>

        <center> 
            <br><br><br><br>

        <button><a href = 'index.html'> Voltar </a></button>
    </body>
</html> 