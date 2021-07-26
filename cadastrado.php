<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles.css">
		<link href="img/icon.png" rel="shortcut icon">
		<title>Cadastrados - Pedra Preta</title>
	</head>
	<body>
	<header>
        <div class="logo">
            <img src="img/pedra.png">
        </div>
    </header>
	<div id="content">
		<div class="card">
			<?php
				header("Content-Type: text/html; charset=latin1");
			
			// 1 - Conectar no MYSQL via PHP
			$con = mysqli_connect('localhost' , 'root', '');

			// 2 - Abrir / selecionar o produtos
			mysqli_select_db($con , 'pedraPreta') or 
				die("Erro na abertura do banco: " . mysqli_error($con) );

			// 3 - Criar a variável com o comando SQL de seleção de dados
			$comandoSQL ="SELECT * FROM ppCadastrado";
				
			// 4 - Executar o comando no Servidor MYSQL e obter o
			// registro de dados, contendo os times encontrados
			
			$registros = mysqli_query($con, $comandoSQL) or 
				die("Erro na seleção de cadastrados: " . mysqli_error($con) );
			
			// 5 - Criando uma variável para pegar o número de linhas (times)
			// existentes dentro de $registros 
			$linhas = mysqli_num_rows($registros);
			
			if($linhas ==0)
			{
				// Não encontrou nenhum cadastro. Encerrar programa
				die("Nenhum foi encontrado. Programa encerrado!");
			}
			
			// Se chegou aqui é porque tem alunos cadastrados
			if($linhas == 1)
			{
				echo "Existe $linhas cadastrado <br>";
			}
			
			if($linhas > 1)
			{
				echo "Existem $linhas cadastrados <br>";
			}
			
			$contador =0; // contador de repetições do loop
			echo "<table border='1'>";
			echo "	<tr>";
			echo "	   <th>CPF</th>";
			echo "	   <th>Nome</th>";
			echo "	   <th>RG</th>";
			echo "	   <th>Sexo</th>";
			echo "	   <th>Endereço</th>";
			echo "	   <th>Número</th>";
			echo "	   <th>Bairro</th>";
			echo "	   <th>Cidade</th>";
			echo "	   <th>Estado</th>";
			echo "	   <th>CEP</th>";
			echo "	   <th>Tel. Celular</th>";
			echo "	   <th>Tel. Fixo</th>";
			echo "	</tr>";

			while( $contador < $linhas)
			{
				// criando a matriz $dados
				$dados = mysqli_fetch_array($registros);
				echo "<tr>";
				echo "<td>" . $dados["ID"] . "</td>";
				echo "<td>" . $dados["nome"]. "</td>";
				echo "<td>" . $dados["RG"]. "</td>";
				echo "<td>" . $dados["sexo"]. "</td>";
				echo "<td>" . $dados["endereco"]."</td>";
				echo "<td>" . $dados["numero"]."</td>";
				echo "<td>" . $dados["bairro"]."</td>";
				echo "<td>" . $dados["cidade"]."</td>";
				echo "<td>" . $dados["estado"]."</td>";
				echo "<td>" . $dados["CEP"]."</td>";
				echo "<td>" . $dados["telCel"]."</td>";
				echo "<td>" . $dados["telFixo"]."</td>";
				echo "</tr>";
				$contador++; // incrementa a variável em 1
			}
			echo "</table>"
			
			?>

		</div>
		<a href="index.html"><button>Home</button></a> 
        
	</div>
	<div id="rodape">
        <p>© 2021 Pedra Preta - Todos os direitos reservados.</p>

        <p>Programa de Formação Tech Itaú PCD em parceria com a Gama Academy.</p>

        <p>Desenvolvido por Diego Justino Amaral de Souza<./p>
    </div>
	</body>

</html>

<!-- Desenvolvido por Diego Justino