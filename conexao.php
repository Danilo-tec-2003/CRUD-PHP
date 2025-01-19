<?php
define('HOST', 'localhost'); //endereço do banco de dados
define('USUARIO', 'root'); //usuario do meu banco
define('SENHA', ''); 
define('DB', 'cruddm'); //nome da base de dados

//criando conexão do banco de dados, caso der algum erro a mensagem informativa será exibida
$conexao = mysqli_connect(HOST,  USUARIO, SENHA, DB) or die ("Conexão sem sucesso")






?>