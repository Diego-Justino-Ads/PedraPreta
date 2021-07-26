<?php
	// 1 - Receber os dados do formulário
	// 	   dentro de variáveis
	$ID         = $_POST["ID"];
	$nome		= $_POST["nome"];
	$RG			= $_POST["RG"];
	$sexo		= $_POST["sexo"];
	$endereco	= $_POST["endereco"];
    $numero		= $_POST["numero"];
    $bairro		= $_POST["bairro"];
    $cidade		= $_POST["cidade"];
    $estado		= $_POST["estado"];
    $CEP		= $_POST["CEP"];
    $telCel		= $_POST["telCel"];
    $telFixo	= $_POST["telFixo"];

	// 2 - Validações básicas
	// Não pode ficar em branco todos os campos.

	if ($ID=="")
	{
		die("CPF não pode ficar vazio!");
	}

	if ($nome=="")
	{
		die("Nome não pode ficar vazio!");
	}

	if ($endereco=="")
	{
		die("Endereço não pode ficar vazio!");
	}

    if ($numero=="")
	{
		die("Número não pode ficar vazio!");
	}

    if ($telCel=="")
	{
		die("Telefone Celular não pode ficar vazio!");
	}

	// 3 - Exibindo os dados vindos do formulário
	echo "CPF: <b>$ID</b><br>";
	echo "Nome: <b>$nome</b><br>";
	echo "RG: <b>$RG</b><br>";
	echo "Sexo: <b>$sexo</b><br>";
	echo "Endereço: <b>$endereco, $numero, $bairro, $cidade - $estado </b><br>";
    echo "CEP: <b>$CEP</b><br>";
    echo "Telefone Celular: <b>$telCel</b><br>";
    echo "Telefone Fixo: <b>$telFixo</b><br>";

	// 4 - Abrindo o banco de dados
	// 4.1 - Conexão com o servidor MYSQL

	$con=mysqli_connect("localhost","root","")or
	die("Erro na conexão com Servidor MYSQL");
	$db=mysqli_select_db($con,"pedraPreta") or
	die("Erro na seleção do banco de dados:".mysql_error($con));
	$sql="INSERT INTO  ppCadastrado(ID,nome,RG,sexo,endereco,numero,bairro,cidade,estado,CEP,telCel,telFixo)VALUES('$ID','$nome','$RG','$sexo','$endereco','$numero','$bairro','$cidade','$estado','$CEP','$telCel','$telFixo')";
	mysqli_query($con,$sql)or die("Erro na inserção de registro no banco:".mysqli_error($con));

	$rs=mysqli_query($con,"SELECT LAST_INSERT_ID()FROM ppCadastrado");
	$dados=mysqli_fetch_array($rs);
	$idCriado=$dados[0];
	echo"<hr>";
	echo"Registro $idCriado inserido na tabela<br>";
	echo"Dados gravados com SUCESSO!";
	
	// Desenvolvido por Diego Justino
			
?>