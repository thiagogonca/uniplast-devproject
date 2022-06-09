<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php include 'head.php'; ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

      <!-- Parte de Navegação -->
    <?php include 'menu.php'; ?>

    <div class="container">

        <div class="row">
        </div>

        <div class="row">
			<!-- Cadastro Produto -->
            <div class="col-md-8">
                <h3>Cadastre o Banner</h3><br/>
                <form name="formulario" method="post" action="inclusaobanner.php" enctype="multipart/form-data">
					<div class="control-group form-group">
                        <div class="controls">
							<label>Imagem:</label>
							<input name="arquivo" type="file"><br><br>
						</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
					<a href="banner.php" class="btn btn-danger">Voltar</a>
                </form>
            </div>
        </div>

        <hr>
		
		</div>

        <!-- Base -->
    <?php include 'footer_2.php' ?>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
