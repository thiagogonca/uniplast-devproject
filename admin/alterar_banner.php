<!doctype html>
<html>
	<head>
		<?php include 'head.php'; ?>
	</head>
	<body>
		<?php
			include 'menu.php';
			include 'conexao.php';
			$cod = $_POST['cod'];
			$arquivo=$_FILES['arquivo']['name'];
			//pasta onde vai ser salvo a foto
			$_UP['pasta'] = '../pictures/';
			
			//Tamanho máximo do arquivo em bytes
			$_UP['tamanho'] = 1360*1360*370;
			
			//Array com extensões permitidas
			$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
			
			$_UP['renomeia'] = false;
			
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
				echo "<script>window.location='banner.php'</script>";
			}
			
			//Faz a verificação do tamanho do arquivo
			else if($_UP['tamanho'] <$_FILES['arquivo']['size']){
				echo "<script>alert('Arquivo muito grande');</script>";
				echo "<script>window.location='banner.php';</script>";
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
					$query = mysql_query("UPDATE carousel SET imagem = '$nome_final' WHERE id = '$cod'");
				
					echo "<script>alert('imagem cadastrada com sucesso');</script>";
					echo "<script>window.location='banner.php';</script>";
				}
				else{
					echo "<script>alert('imagem não cadastrada!');</script>";
					echo "<script>window.location='banner.php';</script>";
				}
			}
			?>
	</body>
</html>