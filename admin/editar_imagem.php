<!DOCTYPE html>
<html lang="pt-br">

<head>
<?php include 'head.php'; ?>
	
	<?php include 'conexao.php';	
	if(isset($_GET["id"])){	
			$id = $_GET["id"];
		}
	?>
</head>

<body>
    <!-- Parte de Navegação -->
    <?php include 'menu.php'; ?>
	<?php
		include 'conexao.php';
		mysql_query("set names 'utf8';");
	?>
	<div class="container" style="margin-top: 15px;">
	<h3>Alterar a Imagem</h3>
	<form method="post" action="alterar_imagem.php" enctype="multipart/form-data">
	<div class="control-group form-group">
        <div class="controls">
				<input type="hidden" class="form-control" id="cod" name="cod" placeholder="Informe o código do produto" value="<?php echo $_GET['id'];?>"  required />
        </div>
    </div>
					
	<div class="form-group">
		<div class="controls">
			<label>Imagem:</label>
				<input name="arquivo" class="form-control-file" id="arquivo" type="file"><br><br>
		</div>
	</div>
    <button type="submit" class="btn btn-primary">Alterar</button>
	<a href="editar_cadastro.php?id=<?php echo $id ?>" class="btn btn-danger" id="link">Voltar</a>
	</div>
	
	<?php include 'footer_2.php' ?>
	
</body>
</html>