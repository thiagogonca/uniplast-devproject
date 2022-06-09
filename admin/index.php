<!DOCTYPE html>
<html lang="pt-br">

<head>
	
	<?php include 'head.php'; ?>
	
	<style>
		.btn3d {
			position:relative;
			top: -6px;
			border:0;
			 transition: all 40ms linear;
			 margin-top:10px;
			 margin-bottom:10px;
			 margin-left:2px;
			 margin-right:2px;
		}
		.btn3d:active:focus,
		.btn3d:focus:hover,
		.btn3d:focus {
			-moz-outline-style:none;
				 outline:medium none;
		}
		.btn3d:active, .btn3d.active {
			top:2px;
		}
		.btn3d.btn-white {
			color: #666666;
			box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 2px rgba(255,255,255,0.10) inset, 0 8px 0 0 #f5f5f5, 0 8px 8px 1px rgba(0,0,0,.2);
			background-color:#fff;
		}
		.btn3d.btn-white:active, .btn3d.btn-white.active {
			color: #666666;
			box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,.1);
			background-color:#fff;
		}
		.btn3d.btn-default {
			color: #666666;
			box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 2px rgba(255,255,255,0.10) inset, 0 8px 0 0 #BEBEBE, 0 8px 8px 1px rgba(0,0,0,.2);
			background-color:#f9f9f9;
		}
		.btn3d.btn-default:active, .btn3d.btn-default.active {
			color: #666666;
			box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,.1);
			background-color:#f9f9f9;
		}
		.btn3d.btn-primary {
			box-shadow:0 0 0 1px #417fbd inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #4D5BBE, 0 8px 8px 1px rgba(0,0,0,0.5);
			background-color:#4274D7;
		}
		.btn3d.btn-primary:active, .btn3d.btn-primary.active {
			box-shadow:0 0 0 1px #417fbd inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
			background-color:#4274D7;
		}
		.btn3d.btn-success {
			box-shadow:0 0 0 1px #31c300 inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #5eb924, 0 8px 8px 1px rgba(0,0,0,0.5);
			background-color:#78d739;
		}
		.btn3d.btn-success:active, .btn3d.btn-success.active {
			box-shadow:0 0 0 1px #30cd00 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
			background-color: #78d739;
		}
		.btn3d.btn-info {
			box-shadow:0 0 0 1px #00a5c3 inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #348FD2, 0 8px 8px 1px rgba(0,0,0,0.5);
			background-color:#39B3D7;
		}
		.btn3d.btn-info:active, .btn3d.btn-info.active {
			box-shadow:0 0 0 1px #00a5c3 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
			background-color: #39B3D7;
		}
		.btn3d.btn-warning {
			box-shadow:0 0 0 1px #d79a47 inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #D79A34, 0 8px 8px 1px rgba(0,0,0,0.5);
			background-color:#FEAF20;
		}
		.btn3d.btn-warning:active, .btn3d.btn-warning.active {
			box-shadow:0 0 0 1px #d79a47 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
			background-color: #FEAF20;
		}
		.btn3d.btn-danger {
			box-shadow:0 0 0 1px #b93802 inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #AA0000, 0 8px 8px 1px rgba(0,0,0,0.5);
			background-color:#D73814;
		}
		.btn3d.btn-danger:active, .btn3d.btn-danger.active {
			box-shadow:0 0 0 1px #b93802 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
			background-color: #D73814;
		}
		.btn3d.btn-magick {
			color: #fff;
			box-shadow:0 0 0 1px #9a00cd inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #9823d5, 0 8px 8px 1px rgba(0,0,0,0.5);
			background-color:#bb39d7;
		}
		.btn3d.btn-magick:active, .btn3d.btn-magick.active {
			box-shadow:0 0 0 1px #9a00cd inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
			background-color: #bb39d7;
		}
	</style>
	
</head>

<body>
	
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><img src="../logo2.png" style="max-height:20px; max-width:100px"></a>
			</div>
		</div>
    </nav>
	
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <h2 class="intro-text text-center">Página do
                        <strong>Administrador</strong>
                    </h2>
                    <hr>
                </div>
           
                <div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-login">
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<form id="login-form" action="conf_senha.php" method="post">
										<h2>Login</h2>
										<div class="form-group">
											<input type="text" name="txtusuario" id="txtusuario" tabindex="1" class="form-control" placeholder="Nome do usuário" value="">
										</div>
										<div class="form-group">
											<input type="password" name="txtsenha" id="txtsenha" tabindex="2" class="form-control" placeholder="Senha">
										</div>
										<div class="col-sm-6 col-sm-offset-3">
												<center><input type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn3d btn btn-default btn-lg" value="Entrar"></center>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
                <div class="clearfix"></div>
            </div>
        </div>
	</div>
	
	<?php include 'footer_2.php' ?>
    <!-- /.container -->
	
	<script>
		$(function() {
			$('#login-form-link').click(function(e) {
				$("#login-form").delay(100).fadeIn(100);
				$("#register-form").fadeOut(100);
				$('#register-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});
			$('#register-form-link').click(function(e) {
				$("#register-form").delay(100).fadeIn(100);
				$("#login-form").fadeOut(100);
				$('#login-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});

		});
		
	</script>
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>