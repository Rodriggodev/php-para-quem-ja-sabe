<h2>Contato</h2>

<form action="pages/forms/contato.php" method="POST" role="form">
	
		<div class="form-group">	
			<label for="">Nome</label>
			<input type="text" class="form-control" name="nome" placeholder="Informe seu name">
		</div>	

		<div class="form-group">	
			<label for="">E-mail</label>
			<input type="text" class="form-control" name="email" placeholder="Email">
		</div>	

		<div class="form-group">	
			<label for="">Assunto</label>
			<input type="text" class="form-control" name="subject" placeholder="infome o assunto">
		</div>	

		<div class="form-group">	
			<label for="">Mensagem</label>
			<textarea name="message" cols="30" rows="10" class="form-control"></textarea>
		</div>	

		<button type="submit" class="btn btn-primary">Enviar</button>
</form>