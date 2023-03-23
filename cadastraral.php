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

                <li><a class="active" href="">ALTERAR</a></li>
            </ul>
        </nav>

    <!-- Fim-Menu-Principal -->

    <!-- Começo Form -->


    <center>

    <font face = "Helvetica" size="6"><font size="4">

    <form name="cliente" method = "POST" action = "">
        <fieldset id="a">
            <legend><b>Dados do Produto</b></legend>
                <p> Matrícula: <input name="txtmat" type="text" size="40" maxlenght="40" placeholder="Número da Matrícula">
                <p> Nome: <input name="txtnome" type="text" size="40" maxlenght="40" placeholder="Nome do Aluno">
                <p> Endereço: <input name="txtend" type="text" size="40" maxlenght="40" placeholder="Nome do Endereço">  
                <p> Cidade: <input name="txtcid" type="text" size="40" maxlenght="40" placeholder="Nome da Cidade">  
                <p> Código Curso: <input name="txtcodcurso" type="text" size="40" maxlenght="40" placeholder="Código (01, 02, 03)">
                
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
        include_once 'alunos.php';

        $alu=new Alunos();
        $alu->setMat ($txtmat);
        $alu->setNome($txtnome);
        $alu->setEndereco($txtend);
        $alu->setCidade($txtcid);
        $alu->setCurso($txtcodcurso);
        echo "<h3><br><br>" . $alu->salvarAl() . "</h3>";
    }
    ?>

    <br>
    <center>
        <button><a href = "index.html"> Voltar </a></button>
    </center>

    <!-- Fim-do-PHP-->

</body>
</html