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
    <?php
        // 1 - Receber os dados do formulário
        // 	   dentro de variáveis
        $cpf         = $_POST["cpf"];
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

        if ($cpf=="")
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
        echo "CPF: <b>$cpf</b><br>";
        echo "Nome: <b>$nome</b><br>";
        echo "RG: <b>$RG</b><br>";
        echo "Sexo: <b>$sexo</b><br>";
        echo "Endereço: <b>$endereco, $numero, $bairro, $cidade - $estado </b><br>";
        echo "CEP: <b>$CEP</b><br>";
        echo "Telefone Celular: <b>$telCel</b><br>";
        echo "Telefone Fixo: <b>$telFixo</b><br>";

        // 4 - Abrindo o banco de dados
        // 4.1 - Conexão com o servidor MYSQL

        $con=mysqli_connect("localhost","u604983253_diegojustino","8paHHAS#q")or
        die("Erro na conexão com Servidor MYSQL");
        $db=mysqli_select_db($con,"u604983253_pedrapreta") or
        die("Erro na seleção do banco de dados:".mysql_error($con));
        $sql="INSERT INTO  ppcadastrado(cpf,nome,RG,sexo,endereco,numero,bairro,cidade,estado,CEP,telCel,telFixo)VALUES('$cpf','$nome','$RG','$sexo','$endereco','$numero','$bairro','$cidade','$estado','$CEP','$telCel','$telFixo')";
        mysqli_query($con,$sql)or die("Erro na inserção de registro no banco, pois CPF já foi cadastrado: ".mysqli_error($con));

        $rs=mysqli_query($con,"SELECT LAST_INSERT_ID()FROM ppcadastrado");
        $dados=mysqli_fetch_array($rs);
        $idCriado=$dados[0];
        echo"<hr>";
        echo"Registro $idCriado inserido na tabela<br>";
        echo"Dados gravados com SUCESSO!";
        
        // Desenvolvido por Diego Justino
                
    ?>
    <div class="linha">

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