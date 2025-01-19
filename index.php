<?php
session_start();
  require 'conexao.php'
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <?php include('navbar.php'); ?> <!--"exportando o arquivo navbar.php"-->
    <div class="container mt-4 px-2"> <!-- Adicionando padding horizontal para melhor espaçamento em telas menores -->
      <?php include('mensagem.php'); ?> <!--"exportando o arquivo mensagem.php"-->
      
      <div class="row">
        <div class="col-12"> <!-- Alterado para garantir que ocupa a largura total em telas menores -->
          <div class="card">
            <div class="card-header">
              <h4> Lista de Usuários
                <a href="usuario-create.php" class="btn btn-primary float-end">Adicionar usuário</a>
              </h4>
            </div>
            <div class="card-body"> 
                <div class="table-responsive"> <!-- Tornando a tabela responsiva -->
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data Nascimento</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    // selecionando todos os dados da tabela
                    $sql = 'SELECT * FROM usuarios';
                    $usuarios = mysqli_query($conexao, $sql);
                    // verificando se a consulta retorna algo
                    if (mysqli_num_rows($usuarios) > 0) {
                      //loop que percorre todos os registros retornados pela consulta
                      //A cada iteração, a variável $usuario conterá os dados de um usuário específico.
                      foreach($usuarios as $usuario) {

                      ?>
                                    
                  <tr>
                    <td><?=$usuario['id']?></td>
                    <td><?=$usuario['nome']?></td>
                    <td><?=$usuario['email']?></td>
                    <!-- formatando para padrão de data BR com -->
                    <td><?=date('d/m/Y', strtotime($usuario['data_nascimento']))?></td>
                    <td>

                  <!-- saber qual usuário foi selecionado -->
                      <div class="d-flex gap-2"> <!-- Garantindo espaçamento uniforme entre os botões -->
                        <a href="usuario-view.php?id=<?php echo $usuario['id']?>" class="btn btn-secondary btn-sm"><span class="bi-eye-fill"></span>&nbsp;
                        Visualizar</a>
                        
                        <a href="usuario-edit.php?id=<?php echo $usuario['id']; ?>" class="btn btn-success btn-sm"><span class="bi-pencil-fill"></span>&nbsp;
                        Editar</a>
                        <form action="acoes.php" method="POST" class="d-inline">
                          <button onclick="return confirm('Tem certeza que deseja excluir?')" type="submit" name="delete_usuario" value="<?=$usuario['id']?>" class="btn btn-danger btn-sm">
                          <span class="bi-trash3-fill"></span>&nbsp;Excluir
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  <?php 
                    }
                  } else {
                   echo '<h5>Nenhum usuário encontrado</h5>';
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>