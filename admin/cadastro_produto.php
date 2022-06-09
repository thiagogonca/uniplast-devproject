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
                <h3>Cadastre o Produto</h3><br/>
                <form name="formulario" method="post" action="inclusaoproduto.php" enctype="multipart/form-data">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Código do Produto:</label>
                            <input type="text" class="form-control" id="cod" name="cod" placeholder="Informe o código do produto" required />
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nome do Produto:</label>
                            <input type="text" class="form-control" id="produto" name="produto" placeholder="Informe o produto" required />
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Linha:</label>
                            <input type="text" class="form-control" id="linha" name="linha" placeholder="Informe a linha" required />
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Cor:</label>
                            <input type="text" class="form-control" id="cor" name="cor" placeholder="Informe a cor" required />
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Material:</label>
                            <input type="text" class="form-control" id="material" name="material" placeholder="Informe o produto" required />
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Aplicação do Produto:</label>
                            <input type="text" class="form-control" id="AplicProduto" name="AplicProduto" placeholder="Informe a aplicação do produto" required />
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Detalhe:</label>
                            <textarea rows="10" cols="100" class="form-control" id="detalhe" name="detalhe" placeholder="Informe os detalhes" maxlength="999" style="resize:none" required ></textarea>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
							<label>Imagem:</label>
							<input name="arquivo" type="file"><br><br>
						</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>

        <hr>
		
		</div>

        <!-- Base -->
    <?php include 'footer_1.php' ?>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
