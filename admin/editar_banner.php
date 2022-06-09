<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Uniplast S.A.</title>
	<link rel="shortcut icon" href="http://www.uniplast.com.br/skin/frontend/default/default/favicon.ico" type="image/x-icon" />
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/modern-business.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
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
		$id = $_GET["id"];
		
		$sql = "select * from carousel where id = '".$_GET["id"]."'";
		$executa   = mysql_query($sql);
		$resultado = mysql_fetch_array($executa);
	?>
	<div class="container" style="margin-top: 15px;">
	<h3>Alterar o Banner</h3>
	<form method="post" action="alterar_banner.php" enctype="multipart/form-data">
	<div class="control-group form-group">
        <div class="controls">
				<input type="hidden" class="form-control" id="cod" name="cod" placeholder="Informe o código do produto" value="<?php echo $id?>"  required />
        </div>
    </div>
					
	<div class="form-group">
		<div class="controls">
			<label>Imagem:</label>
				<input name="arquivo" class="form-control-file" id="arquivo" type="file"><br><br>
		</div>
	</div>
    <button type="submit" class="btn btn-primary">Alterar</button>
	<a href="banner.php" class="btn btn-danger" id="link">Voltar</a>
	</div>
	
	<?php include 'footer_2.php' ?>
	
</body>
</html>