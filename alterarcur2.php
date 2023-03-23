<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset = "utf-8">

            <title>Manutenção Curso</title>
            
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
                $txtcod=$_POST["txtcod"];
                include_once 'curso.php';
                $cur = new Curso();
                $cur -> setCodigo($txtcod);
                $cur_bd = $cur->alterarCur();
            ?>

            <br><form name = "cliente" method = "POST" action = "">

            <?php

                foreach($cur_bd as $cur_mostrar)
                {
            ?>

            <input type = "hidden" name = "txtcod" size = "5" value='<?php echo $cur_mostrar[0] ?>'>
                <b> <?php echo "Código:" . $cur_mostrar[0]; ?></b>

            <br><br> <b> <?php echo "Nome: ";?></b>
            <input type = "text" name = "txtnome" size = "25" value='<?php echo $cur_mostrar[1] ?>'>

            <br><br> <b> <?php echo "COD - 1: ";?></b>
            <input type = "text" name = "txtcod1" size = "10" value='<?php echo $cur_mostrar[2] ?>'>

            <br><br> <b> <?php echo "COD - 2: ";?></b>
            <input type = "text" name = "txtcod2" size = "10" value='<?php echo $cur_mostrar[3] ?>'>

            <br><br> <b> <?php echo "COD - 3: ";?></b>
            <input type = "text" name = "txtcod3" size = "10" value='<?php echo $cur_mostrar[4] ?>'>

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
                include_once 'curso.php';
                $cur = new Curso();
                $cur->setCodigo($txtcod);
                $cur->setNome($txtnome);
                $cur->setCod1($txtcod1);
                $cur->setCod2($txtcod2);
                $cur->setCod3($txtcod3);
                echo "<br><br><h3>" . $cur->alterarCur2() . "</h3>";   
                header("location:alterarcur1.php");  
            }
        ?>

        <center> 
            <br><br><br><br>

        <button><a href = 'index.html'> Voltar </a></button>
    </body>
</html> 