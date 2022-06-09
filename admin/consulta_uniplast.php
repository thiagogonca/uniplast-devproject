	<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php include 'head.php'; ?>

		<script>
		function apagar(id){		     
			if(window.confirm("Confirma a exclusão ?")){
				window.location = 'excluir_produto.php?id=' + id;			
			}	
		}  	  
		</script>
		
	</head>
<?php
	include 'conexao.php';   
	$resultado = mysql_query("select * from produtos"); 
			
  ?> 
  <body>
	  <!-- Parte de Navegação -->
    <?php include 'menu.php'; ?>
	<!-- Tabela -->
	<table class="table" align="center">	
			<thead class="cabecalho">
				<tr>
					<th>Código</th>				
					<th>Produto</th>
					<th>Linha</th>
					<th>Cor</th>
					<th>Material</th>
					<th>Aplicação</th>
					<th>Detalhes</th>
					<th>Imagem</th>
					<th></th>
				</tr>
			</thead>	
	<?php 
      $contLin = 2;
	   while($reg_cadastro=mysql_fetch_array($resultado))
		{
			$cod=$reg_cadastro["CD_PRODUTO"];
			$produto=$reg_cadastro["DS_PRODUTO"]."<br>";
			$linha=$reg_cadastro["DS_LINHA"]."<br>";
			$cor=$reg_cadastro["DS_COR"]."<br>";
			$material=$reg_cadastro["DS_MATERIAL"]."<br>";
			$aplic=$reg_cadastro["DS_APLIC_PRODUTO"]."<br>";
			$detalhes=$reg_cadastro["DS_DETALHES"]."<br>";
			$img=$reg_cadastro["IMAGEM"];
		
	?>
		<tr>
		<?php	
			if($contLin%2 == 0){
			   ?>
			   <tr class="trpar">
			<?php
			}
		?>	
			<td><?php echo $cod ?></td>
			<td><?php echo $produto ?></td>
			<td><?php echo $linha ?></td>
			<td style="width: 100px;"><?php echo $cor ?></td>
			<td style="width: 90px;"><?php echo $material ?></td>
			<td><?php echo $aplic ?></td>
			
			<div class="container">
				<div class="row">
			
					<div id="myModal<?php echo $cod ?>" class="modal fade in">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><?php echo $cod ?></h4>
								</div>
								<div class="modal-body">
									<h4><?php echo $produto ?></h4>
									<p><?php echo $detalhes ?></p>
								</div>
								<div class="modal-footer">
									<div class="btn-group">
										<button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fechar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
			
			<td><a data-toggle="modal" href="#myModal<?php echo $cod ?>" class="btn btn-primary"><span class="glyphicon glyphicon-zoom-in"></span> Visualizar</a></td>

				</div>
			</div>
			
			<div class="container">
				<div class="row">
			
					<div id="myModal<?php echo $cod ?>_" class="modal fade in">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><?php echo $cod ?></h4>
								</div>
								<div class="modal-body">
									<h4><?php echo $produto ?></h4>
									<img src="..\foto\<?php echo $img ?>" style="max-width: 95%; max-height: 95%;"></img>
								</div>
								<div class="modal-footer">
									<div class="btn-group">
										<button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fechar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
			
			<td><a data-toggle="modal" href="#myModal<?php echo $cod ?>_" class="btn btn-primary"><span class="glyphicon glyphicon-zoom-in"></span> Visualizar</a></td>

				</div>
			</div>
			
			<td align="center"><a href="editar_cadastro.php?id=<?php echo $cod?>" class="btn btn-success"><span class="glyphicon glyphicon-cog"></span> Alterar</a>
			<td align="center"> <a href="#" class="btn btn-danger" onclick = "apagar('<?php echo $cod ?>');"><span class="glyphicon glyphicon-trash"></span> Excluir</td>
		</tr>	  	 
	<?php	
	  $contLin = $contLin + 1;
	}
 ?> 
	</table> 
	</div>
        <!-- Base -->
	<?php include 'footer_1.php' ?>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>	
 </body> 
</html>	