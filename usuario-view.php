<?php 
require 'conexao.php'; 
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuário - Visualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php include('navbar.php'); ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Visualizar Usúario</h4>
                        <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                    </div>

                    <div class="card-body">
                        <?php 
                        //verufuca se o parametro desejado, nesse caso o ID está prsente na URL
                        if (isset($_GET['id'])) {

                            // a função é usada para garantir que o valor do id seja seguro, protegendo sobre SQL INJECTION
                            $usuario_id =mysqli_real_escape_string($conexao, $_GET['id']);

                            //indo buscar o id fornecido pelo o usuario
                            $sql = "SELECT * FROM usuarios WHERE id='$usuario_id'";
                            $query = mysqli_query($conexao, $sql);
                         
                            //verificando se algum usuario foi achado, se TRUE ele vai ser armazenado na var #usuario
                            //afunção recuperauma linha de resultado da consulta SQL e retorna como um array    
                            if (mysqli_num_rows($query) > 0) {
                                $usuario = mysqli_fetch_array($query);
                    
                        ?>                
                    <div class="mb-3">
                        <label>Nome</label>
                        <p class="form-control">
                        <?=$usuario['nome']; ?>
                        </p>
                    </div>

                    <div class="mb-3">
                        <label>email</label>
                        <p class="form-control">
                        <?=$usuario['email']; ?>
                        </p>
                    </div>

                    <div class="mb-3">
                        <label>Data Nascimento</label>
                        <p class="form-control">
                        <?=date('d/m/Y', strtotime($usuario['data_nascimento'])); ?>
                        </p>                    
                     </div>
                    <?php 
                    } else {
                    echo "<h5>Usuário não encontrado</h5>";
                    }
                }
                    ?>


                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>