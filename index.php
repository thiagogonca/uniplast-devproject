<!DOCTYPE html>
<html lang="pt-br">

<head>

    <?php
		include 'head.php';
	?>

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
    <?php
		include 'menu.php';
		include 'conexaoP.php';
	?>

    <!-- Efeito Topo -->
    <header id="myCarousel" class="carousel slide">
        <!--<ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol-->

        <!-- Slides -->
        <div class="carousel-inner">
            <?php  
				$controle = 2;
				$result_carousel = "SELECT * FROM carousel";
				$resultado_carousel = mysqli_query($conn, $result_carousel);
				
				while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){
					if($controle == 2){
			?> 
			<div class="item active">
                <div class="fill" style="background-image:url('pictures/<?php echo $row_carousel["imagem"] ?>');"></div>
                <div class="carousel-caption">
					<h3></h3>
					<p></p>
                </div>
            </div>
			<?php
				$controle = 1;
				}
				else{
			?>
            <div class="item">
                <div class="fill" style="background-image:url('pictures/<?php echo $row_carousel["imagem"] ?>');"></div>
                <div class="carousel-caption">
                </div>
            </div>
			<?php
				}
				}
			?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="icon-next"></span>
		</a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Características -->
        <div class="row">
            <div class="col-lg-12">
                <center><h2 class="panel-header" style="padding-top: 1%;">A Uniplast</h2></center>
			</div>
            <div class="col-md-6">
				<p><br/>&nbsp; &nbsp; Fundada em 1985, a Uniplast iniciou suas atividades na cidade de Canoinhas, no Planalto Norte de Santa Catarina. <br />
				&nbsp; &nbsp; Após um ano de existência, a Uniplast migrou para Joinville, estabelecendo-se em uma planta de três mil metros quadrados. <br />
				&nbsp; &nbsp; A unidade é especialista no desenvolvimento e na produção de perfis termoplásticos para as mais variadas aplicações como em eletrodomésticos, móveis, componentes para baús frigoríficos, refrigeração comercial, construção civil, entre outros.</p>
            </div>
            <div class="col-md-6">
                <br/><img class="img-responsive" src="pag_inicial.jpg" style="max-width:65%; max-height:45%; margin-left: 20%;" alt="">
            </div>
        </div>

        <hr>

  <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-info-circle"></i> Perfis Plásticos de qualidade:</h4>
                    </div>
                    <div class="panel-body">
                        <p>&nbsp; &nbsp; Acabamentos pré-moldados e sob medida, molduras, bordas, arremates e muito mais materiais de garantia e qualidade.</p><br />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-question-circle"></i> Por que Uniplast?</h4>
                    </div>
                    <div class="panel-body">
                        <p>&nbsp; &nbsp; A Uniplast possui um sistema de Gestão e Inspeção da Qualidade que assegura o dote do produto desde matéria-prima.</p><br />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-info-circle"></i> Cantoneiras e Tubos PVC:</h4>
                    </div>
                    <div class="panel-body">
                        <!--<img src="http://ceramicaprimavera.com.br/06.jpg" class="composicaomaterial">!-->
						<p>&nbsp; &nbsp; As cantoneiras e tubos PVC da Uniplast encontram-se entre as mais populares categorias de produção e venda em Santa Catarina.</p>
                    </div>
                </div>
            </div>
          </div>
        <!-- Base -->
        <?php 
            include 'footer_1.php'; 
        ?>
        
    <script src='css/bootstrap.min.css'></script>


    <!-- jQuery -->
    <script src="admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
