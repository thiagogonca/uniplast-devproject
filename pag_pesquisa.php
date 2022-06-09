<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'head.php' ?>
</head>

<?php
include("conexaoP.php");
//Verificar se est� sendo passado na URL a p�gina atual, senao � atribuido a pagina
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
if(!isset($_GET['pesquisar'])){
	header("Location: index.php");
}else{
	$valor_pesquisar = $_GET['pesquisar'];
}


//Selecionar todos os cursos da tabela
$result_produto = "SELECT * FROM produtos WHERE DS_PRODUTO LIKE '%$valor_pesquisar%'";
$resultado_produto = mysqli_query($conn, $result_produto);

//Contar o total de cursos
$total_produtos = mysqli_num_rows($resultado_produto);

//Seta a quantidade de cursos por pagina
$quantidade_pg = 6;

//calcular o n�mero de pagina necess�rias para apresentar os cursos
$num_pagina = ceil($total_produtos/$quantidade_pg);

//Calcular o inicio da visualizacao
$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os cursos a serem apresentado na p�gina
$result_produtos = "SELECT * FROM produtos WHERE DS_PRODUTO LIKE '%$valor_pesquisar%' ORDER BY DS_PRODUTO limit $inicio, $quantidade_pg";
$resultado_produtos = mysqli_query($conn, $result_produtos);
$total_produtos = mysqli_num_rows($resultado_produtos);
?>

</body>
	<!-- Parte de Navega��o -->
    <?php include 'menu.php'; ?>

	<div class="container theme-showcase" role="main">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<h1>Produtos</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<?php while($rows_produtos = mysqli_fetch_assoc($resultado_produtos)){ ?>
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail" style="height: 450px;">
						<a href="pesquisa.php?id=<?php echo $rows_produtos['CD_PRODUTO']; ?>"><img src="foto/<?php echo $rows_produtos['IMAGEM']; ?>" style="height: 300px; width: 300px;"></a>
						<div class="caption text-center">
							<a href="pesquisa.php?id=<?php echo $rows_produtos['CD_PRODUTO']; ?>"><h3><?php echo utf8_encode($rows_produtos['DS_PRODUTO']); ?></h3></a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<?php
			//Verificar a pagina anterior e posterior
			$pagina_anterior = $pagina - 1;
			$pagina_posterior = $pagina + 1;
		?>
		<nav class="text-center">
			<ul class="pagination">
				<li>
					<?php
					if($pagina_anterior != 0){ ?>
						<a href="pag_pesquisa.php?pagina=<?php echo $pagina_anterior; ?>&pesquisar=<?php echo $valor_pesquisar; ?>" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					<?php }else{ ?>
					<span aria-hidden="true">&laquo;</span>
				<?php }  ?>
				</li>
				<?php
				//Apresentar a paginacao
				for($i = 1; $i < $num_pagina + 1; $i++){ ?>
					<li><a href="pag_pesquisa.php?pagina=<?php echo $i; ?>&pesquisar=<?php echo $valor_pesquisar; ?>"><?php echo $i; ?></a></li>
				<?php } ?>
				<li>
					<?php
					if($pagina_posterior <= $num_pagina){ ?>
						<a href="pag_pesquisa.php?pagina=<?php echo $pagina_posterior; ?>&pesquisar=<?php echo $valor_pesquisar; ?>" aria-label="Previous">
							<span aria-hidden="true">&raquo;</span>
						</a>
					<?php }else{ ?>
						<span aria-hidden="true">&raquo;</span>
				<?php }  ?>
				</li>
			</ul>
		</nav>
	</div>
</div>

	        <!-- Base -->
    <?php include 'footer_1.php' ?>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
 </body>
</html>
