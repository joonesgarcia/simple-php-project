<?php
	include_once 'conexao.php';
?>

<html>
<head>
	<title>Bem vindo(a)</title>
	<link rel="stylesheet" type="text/css" href="">
</head>

<body>
	<?php
		
		$Login= $_POST["usuario"];
		$Senha= $_POST["senha"];
		$Nome_Empresa= $_POST["nome_empresa"];
		$Email= $_POST["email"];
		$Telefone= $_POST["telefone"];
		$Cidade= $_POST["cidade"];
		$Endereco= $_POST["endereco"];
		$Cep= $_POST["cep"];
		$result = dbInsertEmpresaTerceirizada($Nome_Empresa, $Login, $Senha  , $Email, $Telefone, $Cidade, $Endereco, $Cep);
			if ($result == 1) {
				header("Location: login.php");
			}
	?>
	
	
</body>
</html>