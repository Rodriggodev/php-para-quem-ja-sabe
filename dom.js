<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>curso de js</title>
</head>
<body>

	<div id="app">
		<input type="text" name="nome">
		<button class="botao">adicionar</button>
	</div>
	<script>
		var inputElement= document.querySelector('input[name=nome]');// ta peguando o nome que será coloado no input atraves do name

		var btnElement = document.querySelector('button.botao');//pegando a ação do button

		btnElement.onclick = function(){

			var text= inputElement.value;// pegando o valor do input

			alert(text);//exibirá que foi digitado no input.
		}
	</script>
</body>
</html>
