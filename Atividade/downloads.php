<?php
	$diretorio = "uploads";
	$dir = opendir($diretorio);
	while($arquivo = readdir($dir)){
		if($arquivo !="." && $arquivo ==".."){
			echo "<a href='uploads/$arquivo' download>$arquivos</a><br />";
		}
		
	}
?>
