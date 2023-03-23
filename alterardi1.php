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

        <form name = "cliente" method = "POST" action = "alterardi2.php">
        <fieldset>
            <legend><b> Informe o código da disciplina desejada: </b></legend>
                <p> Código: <input name = "txtmat" type = "text" size = "20" maxlength = "5" palceholder = "Código">
                <br><br><center>
                    <input name="btnenviar" type="submit" value="Consultar"> &nbsp;&nbsp;
                    <input name="Limpar" type="reset" value="Limpar">
        </fieldset>
        </form>

        <center> <br><br><br><br>
        <button><a href = 'menu.html'> Voltar </a></button>
    </body>
</html> 