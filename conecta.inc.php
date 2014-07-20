<?php
	$con = false;
	function conecta(){
		$servidor ="127.0.0.1";
		$usuario_bd = "root";
		$senha_bd = "";
		$banco = "marteladas";
		$bancoDeDados = 'mysql';
		global $con;
		
		try
		{
			$con = new PDO($bancoDeDados.':host='.$servidor.';dbname='.$banco, $usuario_bd, $senha_bd);
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}
	}
	
?>
	
