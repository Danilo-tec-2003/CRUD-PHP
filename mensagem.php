
<?php
//verifica se existe uma variavel de sessão chamada 'mensagem'
	if (isset($_SESSION['mensagem'])):
?>
 
<div class="alert alert-warning alert-dismissible fade show" role="alert">
	<?= $_SESSION['mensagem']; ?>
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
 
<?php
//unset remove a vaiavel especificada, apaga o valor armazenado em session mensagem, 
//geralmente é feito para a mensagem ser exibida apenas uma única vez.
	unset($_SESSION['mensagem']);
	endif;