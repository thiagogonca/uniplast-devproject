<!DOCTYPE html>
<html lang="pt-br">

<head>

    <?php include 'head.php'; ?>

	<style>
		p{
			font-family:"colibri";
			font-size:17px;
		}

		h1, h2, h4{
			font-family:"colibri";
		}
	</style>
</head>

<body>

    <!-- Parte de Navegação -->
    <?php include 'menu.php';
    include("conexao.php");
    if(isset($_GET["id"])){
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $sql = "SELECT * FROM produtos WHERE CD_PRODUTO = '".$_GET['id']."'";
            $executa   = mysql_query($sql);
            $resultado = mysql_fetch_array($executa);
        }
    }

    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Características -->
        <div class="row">
            <div class="col-lg-12">
                <center><h2 class="panel-header"><?php echo $resultado['DS_PRODUTO']; ?></h2></center>
				<hr />
			</div>
            <div class="col-md-6">
                <p>&nbsp; &nbsp;<?php echo $resultado['DS_DETALHES'] ?></p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="../foto/<?php echo $resultado['IMAGEM'] ?>" style="max-width:400px; max-height:400px;" alt="">
            </div>
        </div>

        <hr>

          <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-info-circle"></i> Tipo de Material:</h4>
                    </div>
                    <div class="panel-body">
                        <center><p><?php echo $resultado['DS_MATERIAL'] ?></p></center><br />
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-info-circle"></i>  Linha de Produção:</h4>
                    </div>
                    <div class="panel-body">
                        <center><p><?php echo $resultado['DS_LINHA'] ?></p></center><br />
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-info-circle"></i> Cor do Material:</h4>
                    </div>
                    <div class="panel-body">
                        <center><p><?php echo $resultado['DS_COR'] ?></p></center>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-info-circle"></i> Aplicação do Material:</h4>
                    </div>
                    <div class="panel-body">
                        <center><p><?php echo $resultado['DS_APLIC_PRODUTO'] ?></p></center>
                    </div>
                </div>
            </div>
		</div>
        <!-- Base -->
    <?php include 'footer_1.php' ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
