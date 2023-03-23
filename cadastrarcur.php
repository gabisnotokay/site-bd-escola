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

                <li><a class="active" href="">ALTERAR</a></li>
            </ul>
        </nav>

    <!-- Fim-Menu-Principal -->


    <!-- Começo Form -->


    <center>

    <font face = "Helvetica" size="6"><font size="4">

    <form name="cliente" method = "POST" action = "">
        <fieldset id="a">
            <legend><b>Dados do Curso</b></legend>
                <p> Código Curso: <input name="txtcodcur" type="text" size="40" maxlenght="40" placeholder="C[odigo do Curso">
                <p> Nome Curso: <input name="txtcur" type="text" size="40" maxlenght="40" placeholder="Nome do Curso">
                <p> Código Disciplina 1: <input name="txtdis1" type="text" size="40" maxlenght="40" placeholder="Número Disciplina 1">
                <p> Código Disciplina 2: <input name="txtdis2" type="text" size="40" maxlenght="40" placeholder="Número Disciplina 2">
                <p> Código Disciplina 3: <input name="txtdis3" type="text" size="40" maxlenght="40" placeholder="Número Disciplina 3">

                 
        </fieldset>
        <br>

        <fieldset id="b">
            <legend><b> Opções: </b></legend>
                <br>
                <input name="btnenviar" type="submit" value="Cadastrar"> &nbsp;&nbsp;
                <input name="limpar" type="reset" value="Limpar">
        </fieldset>


    </form>


    <!-- Fim-do-Form -->

    <!-- Começo-do-PHP-->

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar))
    {
        include_once 'curso.php';

        $cur=new Curso();
        $cur->setCodigo($txtcodcur);
        $cur->setNome($txtcur);
        $cur->setCod1($txtdis1);
        $cur->setCod2($txtdis2);
        $cur->setCod3($txtdis3);
        echo "<h3><br><br>" . $cur->salvarCur() . "</h3>";
    }
    ?>

    <br>
    <center>
        <button><a href = "index
        .html"> Voltar </a></button>
    </center>

    <!-- Fim-do-PHP-->

</body>
</html