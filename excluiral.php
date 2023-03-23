<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset = "utf-8">

            <title>Manutenção Alunos</title>
            
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

                <li>
                    <a href="#">EXCLUIR</a>
                    <ul>
                        <li><a href="excluiral.php">ALUNOS</a></li>
                        <li><a href="excluirdi.php">DISCIPLINAS</a></li>
                        <li><a href="excluircur.php">CURSOS</a></li>
                    </ul>
                </li>

                <li><a class="active" href="">PESQUISAR</a></li>

                <li>
                    <a href="#">LISTAR</a>
                    <ul>
                        <li><a href="listaral.php">ALUNOS</a></li>
                        <li><a href="listardi.php">DISCIPLINAS</a></li>
                        <li><a href="listarcur.php">CURSOS</a></li>
                    </ul>
                </li>

                <li><a class="active" href="">ALTERAR</a></li>
            </ul>
        </nav>

    <!-- Fim-Menu-Principal -->

    <!-- Começo Form -->


    <center>

    <font face = "Helvetica" size="6"><font size="4">

    <form name="cliente" method = "POST" action = "">
        <fieldset id="a">
            <legend><b>Informe a Matrícula que deseja deletar:</b></legend>
                <p> Matrícula: <input name="txtmat" type="text" size="40" maxlenght="40" placeholder="Número da Matrícula">
                
                
        </fieldset>
        <br>

        <fieldset id="b">
            <legend><b> Opções: </b></legend>
                <br>
                <input name="btnenviar" type="submit" value="Deletar"> &nbsp;&nbsp;
                <input name="limpar" type="reset" value="Limpar">
        </fieldset>


    </form>


    <!-- Fim-do-Form -->

    <!-- Começo-PHP -->

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar))
    {
        include_once 'alunos.php';

        $alu=new Alunos();
        $alu->setMat ($txtmat);
        echo "<h3><br><br>" . $alu->exclusaoAl() . "</h3>";
    }
    ?>

    <br>
    <center>
        <button><a href = "index.html"> Voltar </a></button>
    </center>

    <!-- Fim-do-PHP-->