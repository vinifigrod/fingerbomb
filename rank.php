<?php
	if(isset($_GET['nome'])){
		include("conecta.inc.php");
		conecta();
		$sql ="INSERT INTO jogadas(nome,pontos) values('".$_GET['nome']."',".$_GET['pontos'].")";
		$req = $con->prepare($sql);
		$req->execute();
	}
?>