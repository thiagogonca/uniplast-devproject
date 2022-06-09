<html>
	<head>
			<!-- Bootstrap e Companhia (1) -->
			<title>Banners - Uniplast S.A.</title>
			<?php include 'head.php'; ?>
				<script>
		function apagar(id){		     
			if(window.confirm("Confirma a exclusão ?")){
				window.location = 'excluir_banner.php?id=' + id;			
			}	
		}  	  
		</script>
	</head>

	<body>	  
	<!-- Parte de Navegação -->
    <?php include 'menu.php'; ?>
	<br/>
    <div class="container">

	<?php
	include 'conexao.php';
		$sql = "SELECT * FROM carousel";
		$executa = mysql_query($sql);
	?>			
	<div class="row">
            <div class="col-md-8">
                <h3>Bannners da Página Inicial</h3>
                <table class="table" align="center">	
			<thead class="cabecalho">
				<tr>				
					<th></th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>	
	<?php 
      $conf_ativo = 2;
	  $contLin = 2;
	   while($consulta = mysql_fetch_assoc($executa)){
			$cod=$consulta["id"];
			$img=$consulta["imagem"];
	?>
		<tr>
			<div class="container">
				<div class="row">
				<?php
					if($conf_ativo == 2){
				?>
					<div id="myModal<?php echo $cod ?>_" class="modal fade in">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<h4>Imagem Principal</h4>
									<img src="..\pictures\<?php echo $img ?>" style="max-width: 95%; max-height: 95%;"></img>
								</div>
								<div class="modal-footer">
									<div class="btn-group">
										<button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fechar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<?php
						$conf_ativo = 1;
						}
						else{
					?>
					<div id="myModal<?php echo $cod ?>_" class="modal fade in">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<h4>Imagem</h4>
									<img src="..\pictures\<?php echo $img ?>" style="max-width: 95%; max-height: 95%;"></img>
								</div>
								<div class="modal-footer">
									<div class="btn-group">
										<button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fechar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<?php
						}
					?>
			<td><p><?php echo $img ?></p></td>
			<td><a data-toggle="modal" href="#myModal<?php echo $cod ?>_" class="btn btn-primary"><span class="glyphicon glyphicon-zoom-in"></span> Visualizar</a></td>
			<td align="center"><a href="editar_banner.php?id=<?php echo $cod?>" class="btn btn-success"><span class="glyphicon glyphicon-cog"></span> Alterar</a>
			<td align="center"> <a href="#" class="btn btn-danger" onclick = "apagar('<?php echo $cod ?>');"><span class="glyphicon glyphicon-trash"></span> Excluir</td>
		</tr>	  	 
	<?php	
		$contLin = $contLin + 1;
		}
	?> 
	</table>
				<a href="cadastro_banner.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Adicionar</a>
            </div>
        </div>		   			
    </div>
	</div>
	</div>
	
	<?php include 'footer_2.php' ?>
    
	<!-- Bootstrap e Companhia (2) -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>
</html>