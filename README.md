# CRUD-PHP
Este projeto é um sistema CRUD simples, mas funcional, onde utilizei meus conhecimentos em PHP e MySQL para implementar operações básicas de criação, leitura, atualização e exclusão de dados.

O que foi feito:
O sistema permite ao usuário realizar operações CRUD em um banco de dados MySQL.
O código contém comentários explicativos sobre como cada parte funciona para garantir que qualquer desenvolvedor possa entender o fluxo do sistema facilmente.
Funcionalidades:
Criar (Create): Inserir novos registros no banco de dados.
Ler (Read): Visualizar os registros armazenados.
Atualizar (Update): Editar os registros existentes.
Excluir (Delete): Remover registros do banco de dados.
Funções PHP Utilizadas
Abaixo estão algumas das funções do PHP que utilizei neste projeto:

1. mysqli_real_escape_string()
Função usada para prevenir SQL Injection ao escapar caracteres especiais em uma string antes de usá-la em uma consulta SQL.

2. unset()
Usada para remover ou destruir variáveis, liberando a memória associada a elas. Isso ajuda a manter o gerenciamento de memória eficiente.

3. password_hash()
Essa função criptografa senhas com o algoritmo bcrypt, garantindo que as senhas dos usuários sejam armazenadas de forma segura e não em texto claro.

4. mysqli_query()
Função essencial para interagir com o banco de dados MySQL, permitindo a execução de consultas SQL diretamente a partir do código PHP.

5. mysqli_affected_rows()
Retorna o número de linhas afetadas pela última operação de INSERT, UPDATE, REPLACE ou DELETE executada no banco de dados.

Como usar:
Configurar o Banco de Dados: Certifique-se de ter um banco de dados MySQL configurado com as credenciais corretas.
Configuração no código: Ajuste as configurações de conexão com o banco de dados no arquivo PHP responsável.
Executar as Operações: Com o banco configurado, você pode realizar as operações CRUD diretamente na interface web.
