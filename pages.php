<?php 

	function load(){
		// pegando o input via get da variavel page e fazendo a validação
		
		$page = filter_input(INPUT_GET,'page', FILTER_SANITIZE_STRING); // filter_sanitize_string=> saber se foi passado uma string

		$page = (!$page) ? 'pages/home.php' : "pages/{$page}.php"; // operador unario como se fosse um if,

		if(!file_exists($page)):{ // file é o arquivo, e to querondo saber se o arquivo exite ! é uma negação
			throw new \Exception("Opa, Error",); // passando o erro
		}

		return $page // retornando a pagina caso exista, o return tá abaixo do if e vai retornar um resultado do if.	
	}
?>