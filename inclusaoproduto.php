<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> Inclusão dos Dados do Usuário </title>
		<link href="estilo.css" rel="stylesheet" type="text/css">
		<meta charset="utf-8">
	</head>
	
	<body> 
		
		<?php
			include 'conexao.php';
			$cod=$_POST['cod'];
			$produto=$_POST['produto'];
			$linha=$_POST['linha'];
			$cor=$_POST['cor'];
			$material=$_POST['material'];
			$aplicacao=$_POST['AplicProduto'];
			$detalhe=$_POST['detalhe'];
			
					$arquivo=$_FILES['arquivo']['name'];
					//pasta onde vai ser salvo a foto
					$_UP['pasta'] = 'foto/';
						
					//Tamanho máximo do arquivo em bytes
					$_UP['tamanho'] = 1024*1024*100;
						
					//Array com extensões permitidas
					$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
						
					//Array com os tipos de erros de upload no php
					$_UP['erros'][0] = 'Não houve erro';
					$_UP['erros'][1] = 'O arquivo do upload é maior que o limite do php';
					$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifico do html';
					$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
					$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
						
					//Verifica se houve algum erro com o upload. Caso exista erro exiba a mensagem de erro.
					if($_FILES['arquivo']['erro']=0){die("Não foi possivel fazer upload, erro:<br />".$_UP['erros'][$_FILES['arquivo']['error']]);
					exit; //Interrompe a execução do script
					}
					//Faz a verificação da extensão do arquivo
					$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
					if(array_search($extensao, $_UP['extensoes'])===false){
						echo"<script>alert('Imagem não foi cadastrada. Extensão inválida!'); </script>";
						echo "<script>window.location='cadastro_produto.php'</script>";
					}
					
					//Faz a verificação do tamanho do arquivo
					else if($_UP['tamanho'] <$_FILES['arquivo']['size']){
					echo "<script>alert('Arquivo muito grande');</script>";
					echo "<script>window.location='cadastro_produto.php';</script>";
					}
					//O arquivo passou todas as verificações, hora de tentar move-lo para a pasta foto
					else{
						//Primeiro verifica se deve trocar o nome do arquivo
						if($_UP['renomeia']==true){
							$nome_final = time().'.jpg';
						}
						else{
							//Mantem o nome do arquivo original
							$nome_final = $_FILES['arquivo']['name'];
						}
						//Verifica se é possível mover o arquivo para a pasta escolhida
						if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].$nome_final)){
							$query = mysql_query("INSERT INTO `produtos`(`CD_PRODUTO`, `DS_PRODUTO`, `DS_LINHA`, `DS_COR`, `DS_MATERIAL`, `DS_APLIC_PRODUTO`, `DS_DETALHES`, `IMAGEM`) VALUES ('$cod', '$produto', '$linha', '$cor', '$material', '$aplicacao', '$detalhe', '$nome_final')");
							echo "<script>alert('imagem cadastrada com sucesso');</script>";
							echo "<script>window.location='cadastro_produto.php';</script>";	
						}
						else{
							echo "<script>alert('imagem não cadastrada com sucesso');</script>";
							echo "<script>window.location='cadastro_produto.php';</script>";
						}
					}
				
		?>
		
	</body>
</html>