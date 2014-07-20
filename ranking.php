<!DOCTYPE html>
<html>
	<head>
		<title>Pontuação</title>
	</head>
	<body>
		<table border="1">
			<tr>
				<td width="50">Pos.</td>
				<td width="200">Nome</td>
				<td width="200">Pontos</td>
			</tr>
			<?php
				include("conecta.inc.php");
				$pos = 1;
				conecta();
				$sql ="SELECT * FROM jogadas ORDER BY pontos DESC LIMIT 10";
				$req = $con->prepare($sql);
				$req->execute();
				$result = $req->fetchAll(PDO::FETCH_ASSOC);
				foreach($result as $res){
				?>
			<tr>
				<td><?php echo $pos; ?></td>
				<td><?php echo $res['nome']; ?></td>
				<td><?php echo $res['pontos']; ?></td>
			</tr>
				<?php
				$pos++;
				}
			?>
		</table>
	</body>
</html>