<?php require_once "header.php"; ?>
<?php require_once "menu.php"; ?>

<h1>Deixe sua mensagem</h1>
<form role="form" method="get" action="">
	<div class="form-group">
		<label for="nome">Nome</label>
		<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" id="email" placeholder="Email">
	</div>
	<div class="form-group">
		<label for="assunto">Assunto</label>
		<input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto">
	</div>
	<div class="form-group">
		<label for="mensagem">Mensagem</label>
		<textarea class="form-control" rows="3" name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
	</div>
	<button type="submit" class="btn btn-default">Enviar</button>
</form>

<?php
if($_GET) {
	if( !empty($_GET['nome']) && !empty($_GET['email']) && !empty($_GET['assunto']) && !empty($_GET['mensagem']) ) {
		echo '<h3>Dados enviados com sucesso, abaixo seguem os dados que você enviou!</h3><br>';
		echo "Nome: {$_GET['nome']}<br>";
		echo "Email: {$_GET['email']}<br>";
		echo "Assunto: {$_GET['assunto']}<br>";
		echo "Mensagem: {$_GET['mensagem']}";
	} else {
		echo '<h3>Favor conferir se os dados enviados estão corretos.</h3>';
	}
}
?>

<?php require_once "footer.php"; ?>