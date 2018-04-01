<?php
	$nome = $_POST['nome'];
	$corpo = $_POST['texto'];
	if(!file_exists ("uploads/$nome.html")){
		$arquivo = fopen("uploads/$nome" . ".html","w");
		fwrite($arquivo, $corpo);
		fclose($arquivo);
		echo "";
	}else{
		header("Location: index.php");
	}
?>
