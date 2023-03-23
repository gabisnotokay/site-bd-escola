<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset = "utf-8">

            <title>Manutenção Produtos</title>
            
            <link rel="stylesheet" href="./_css/style.css"> 
        </head> 

        <style>
        form
        {
            margin-top: 10px;
            width: 500px;

        }

        fieldset#a{
            width: 400px;
        }

        fieldset#b{
            margin-top: 10px;
            margin-bottom: 10px;
            width: 400px;
        }

        p{
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .box{
            margin-top: 100px;
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #000000;
            padding: 5px;
            border-radius: 5px;
            width: 50%;
        }
    
    </style>



    <!-- Começo do Menu -->

    <header>
        <div class="logo">
            <a href="index.html">
                <img src="_img/logo.png" />
            </a>
        </div>


    <!-- Fim do Menu -->


    <!-- Começo Form -->


    <div class="box">

    <fieldset>

    <center> <font face = "Helvetica" size="6"><b>LOGIN DE ACESSO</b><br><br><font size="3">

    <form name="cliente" method = "POST" action = "">
        <fieldset id="a">
            <legend><b>Dados:</b></legend>
                <p> Usuário: <input name="txtmat" type="text" size="10" maxlenght="11" placeholder="">
                <p> Senha: <input name="txtsenha" type="text" size="10" maxlenght="11" placeholder=""></p>   
        </fieldset>
        <br>

        <fieldset id="b">
                <br>
                <input name="btnenviar" type="submit" value="Acessar"> &nbsp;&nbsp;
        </fieldset>


    </form>


    <!-- Fim-do-Form -->

    <?php
                extract($_POST, EXTR_OVERWRITE);
                if(isset($btnenviar))
                {
                    include_once 'usuario.php';
                    $u = new Usuario();
                    $u->setMat($txtmat);
                    $u->setSenha($txtsenha);
                    $pro_bd=$u->logar();
    
                    $existe = false;
                    foreach($pro_bd as $pro_mostrar)
                    {
                        $existe = true;
                        ?>
                            <b> <?php echo "Bem vindo! Usuário(a): ".$pro_mostrar[1]; ?></b>
    
                            <center>

                                <button><a href = "menu.html"> Entrar </a></button>
                            </center>

                        <?php
                    }
                    if ($existe==false)
                    {
                        header("location:logininvalido.html");
                    }
                }
            ?>
        </form>
 
    <!-- Fim-do-PHP-->

</body>
</html>