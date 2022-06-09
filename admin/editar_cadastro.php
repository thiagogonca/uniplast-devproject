<html>
	<head>
			<!-- Bootstrap e Companhia (1) -->
			<?php include 'head.php'; ?>
	</head>

	<body>	  
	<!-- Parte de Navegação -->
    <?php include 'menu.php'; ?>

    <!--<div class="container">-->

	<?php
	include 'conexao.php';	
	if(isset($_GET["id"])){	
			$id = $_GET["id"];
			$sql = "select * from produtos where CD_PRODUTO = '".$_GET["id"]."'";
			$executa   = mysql_query($sql);
			$resultado = mysql_fetch_array($executa);
		}
	?>		
 <div class="container">	
	<div class="row">
            <div class="col-md-8">
                <h3>Alterar as informações do produto</h3>
				<br />
				<a href="editar_imagem.php?id=<?php echo $_GET["id"] ?>" class="btn btn-info">Alterar Imagem</a>
				<br />
                <form name="editar" method="post"  action="alterar_cadastro.php">
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="hidden" class="form-control" id="campoCD_PRODUTO" name="campoCD_PRODUTO" placeholder="Informe o código do produto" value="<?php echo ($resultado["CD_PRODUTO"]);?>" required/>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nome do Produto:</label>
                            <input type="text" class="form-control" id="campoDS_PRODUTO" name="campoDS_PRODUTO" placeholder="Informe o nome do produto" value="<?php echo $resultado["DS_PRODUTO"];?>" required/>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Linha:</label>
                            <input type="text" class="form-control" id="campoDS_LINHA" name="campoDS_LINHA" placeholder="Informe a linha do produto" value="<?php echo $resultado["DS_LINHA"];?>" required />
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Cor:</label>
                            <input type="text" class="form-control" id="campoDS_COR" name="campoDS_COR" placeholder="Informe a cor do produto" value="<?php echo $resultado["DS_COR"];?>" required />
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Material:</label>
                            <input type="text" class="form-control" id="campoDS_MATERIAL" name="campoDS_MATERIAL" placeholder="Informe o material produto" value="<?php echo $resultado["DS_MATERIAL"];?>" required />
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Aplicação do Produto:</label>
                            <input type="text" class="form-control" id="campoDS_APLIC_PRODUTO" name="campoDS_APLIC_PRODUTO" placeholder="Informe a aplicação do produto" value="<?php echo $resultado["DS_APLIC_PRODUTO"];?>" required /> 
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Detalhes:</label>
                            <textarea  rows="10" cols="100" class="form-control" id="campoDS_DETALHES" name="campoDS_DETALHES" placeholder="Informe os detalhes do produto" maxlength="999" style="resize:none"><?php echo $resultado["DS_DETALHES"];?></textarea>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
							<input name="arquivo" id="arquivo" type="hidden">
						</div>
                    </div>
                    <!--<input type="submit"  value="alterar" class="btn btn-primary">-->
					<button type="submit" class="btn btn-primary">Alterar</button>
					<a href="consulta_uniplast.php" class="btn btn-danger" id="link">Voltar</a>
                </form>
            </div>
        </div>		   			
    </div>
	
	<?php include 'footer_1.php' ?>
    
	<!-- Bootstrap e Companhia (2) -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>
</html>