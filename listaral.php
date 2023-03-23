<!DOCTYPE html>
    <html>
        <head>

            <link rel="stylesheet" type="text/css" href="_css/main.css"> 

            <title>Escola</title>
            <meta charset ="UTF-8"/>
        </head>


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

                <li><a class="active" href="">CADASTRAR</a></li>

                <li><a class="active" href="">EXCLUIR</a></li>

                <li><a class="active" href="">PESQUISAR</a></li>

                <li>
                    <a href="#">LISTAR</a>
                    <ul>
                        <li><a href="alunos.php">ALUNOS</a></li>
                        <li><a href="disciplina.php">DISCIPLINAS</a></li>
                        <li><a href="curso.php">CURSOS</a></li>
                    </ul>
                </li>

                <li><a class="active" href="">CADASTRAR</a></li>
            </ul>
        </nav>
</header>

        <!-- Fim-Menu-Principal -->

        <center> <font face = "Century Gothic" size="6"><b>Tabela Aluno</b><br><br><font size="4">


        <!-- Começo PHP -->
<?php

    include_once 'alunos.php';
    $al = new Alunos();
    $alu_bd=$al->listarAl();

?>
<b> Matricula &nbsp; &nbsp; Nome &nbsp; &nbsp; Endereço &nbsp; &nbsp; Cidade &nbsp; &nbsp; Cód - Curso</b>

<?php
    foreach($alu_bd as $alu_mostrar)
    {
        ?>
        <br><br>

        <b> <?php echo $alu_mostrar[0]; ?> </b> &nbsp; &nbsp; &nbsp; &nbsp;
            <?php echo $alu_mostrar[1]; ?> &nbsp; &nbsp; &nbsp; &nbsp;
            <?php echo $alu_mostrar[2]; ?> &nbsp; &nbsp; &nbsp; &nbsp;
            <?php echo $alu_mostrar[3]; ?> &nbsp; &nbsp; &nbsp; &nbsp;
            <?php echo $alu_mostrar[4]; ?>
    <?php
    }
        echo "<br><br><button><a href = 'index.html'> Voltar </a></button> "; ?>

    </body>   
	</html>