<?php
    include "scripts/conecta.php";

    $n = $_GET['n'];
?>

<html>

    <head>

        <title> Produtos</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/prod/default.css">
        <link rel="stylesheet" type="text/css" href="css/prod/default2.css">


        <link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
        <link href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta lang="pt-br">
        <meta charset="utf-8">
        <style>

        </style>

    </head>

    <body>
        <!-- começa header -->
        <header>


        </header>
        <!-- acaba header -->
        <!-- começa menu -->
        <!--/.content-->
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!--/.navbar-header-->

           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="default.php?n=1">Produtos</a></li>
                <li><a href="localizacao.html">Localização</a></li>
                <li><a href="contato.html">Contato</a></li>
            </ul>
        </div>
        <!--/.navbar-collapse-->
    </nav>
    <!--/.navbar-->

        <!--acaba menu -->



        <!-- começa container -->
        <div id="container">
                    <!-- começa conteudo -->

            <div class="fotoprod1">

               <?php

                $query= sprintf("SELECT categoria FROM produtos WHERE id=".$n);
                $dados = mysql_query($query) or die (mysql_error());

                $linha = mysql_fetch_assoc($dados);

                ?>

                      <p><?=$linha['categoria']?></p>

                <?php

                    $query= sprintf("SELECT imagem FROM produtos WHERE id=".$n);
                    $dados = mysql_query($query) or die (mysql_error());

                    $linha = mysql_fetch_assoc($dados);

                    $imagem = $linha['imagem'];

                 ?>
              <img src="<?=$imagem?>">

            </div>


            <div class="categoria">
             <h1> CATEGORIAS</h1>

                <?php
                                        $query= sprintf("SELECT * FROM produtos");
                                        $dados = mysql_query($query) or die (mysql_error());

                                        while( $linha= mysql_fetch_array($dados)){ ?>
                                               <p><a href="default.php?n=<?=$linha['id']?>"><?=$linha['categoria']?></a></p>

                                        <?php }?>


<?php
                                        /*$linha = mysql_fetch_assoc($dados);
                                        $total = mysql_num_rows($dados);

                                        $cont = 1;

                                        if($total > 0) {
                                            do{ ?>

                                              <p><a href="default.php?n=<?=$cont?>"><?=$linha['categoria']?></a></p>

                                            <?php
                                            $cont = $cont + 1;
                                            }while ($linha = mysql_fetch_assoc($dados));
                                        }*/

            ?>




            </div>



                        <!-- acaba conteudo -->

        </div>
                <!-- acaba container -->

         <!-- começa rodapé -->
        <footer>
            <div class="contatoRapido" align="center">

                <div class="telefone">
                    <strong><span class="tituloRapido">Telefone :</span></strong>
                    <span class="contRapido">(11) 4526-4855 </span>
                </div>



                <div class="cop">
                    <span>Copyright © 2015 Maxi Mix Armazem | Designed by Appin</span>
                </div>
            </div>
            </footer>

        <!-- acaba rodapé -->
     <!-------------------- JS -------------------->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>
    </body>

</html>