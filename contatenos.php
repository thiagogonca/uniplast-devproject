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
    <?php include 'menu.php'; ?>

    <!-- Page Content -->
    <div class="container">

           <div class="row">
            <div class="box">
                <div class="col-lg-12">
                      <center><h2 class="panel-header">Informações de Contato</h2></center>
                    <hr>
                </div>
                <div class="col-md-8">
                    <iframe width="100%" height="382" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.427682140103!2d-48.87833748496904!3d-26.247779483418427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94deaf7e81cc497b%3A0x6e79a452842573be!2sR.+Dona+Francisca%2C+7650+-+Zona+Industrial+Norte%2C+Joinville+-+SC%2C+80892-210!5e0!3m2!1spt-BR!2sbr!4v15052459245"></iframe>
                </div>
                <div class="col-md-4">
                    <p><strong>Email:</strong>
                        vendas@uniplast.com.br
                    </p>
                    <p><strong>Horário de funcionamento:</strong>
                        Segunda a sexta das 08:00 às 17:30.
                            <br>
                    </p>
                    <p><strong>Telefone:</strong>
                        (47) 3461-8200
                    </p>
                    <p><strong>Localização:</strong>
                      Rua Dona Francisca, 7650 Joinville / SC
                    </p>
					
						<div id="myModal" class="modal fade in">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-body">
										<form name="formulario" method="post" action="" enctype="multipart/form-data">
											<div class="control-group form-group">
												<div class="controls">
													<label>Nome Completo:</label>
													<input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o Nome" required />
												</div>
											</div>
											<div class="control-group form-group">
												<div class="controls">
													<label>E-mail:</label>
													<input type="text" class="form-control" id="email" name="email" placeholder="Informe o E-mail" required />
												</div>
											</div>
											<div class="control-group form-group">
												<div class="controls">
													<label>Mensagem:</label>
													<textarea rows="10" cols="100" class="form-control" id="msg" name="msg" maxlength="999" style="resize:none" required ></textarea>
												</div>
											</div>
											<button type="submit" class="btn btn-primary">Enviar</button>
										</form>
									</div>
									<div class="modal-footer">
										<div class="btn-group">
											<button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fechar</button>
										</div>
									</div>
								</div>
							</div>
						</div>
			
					<td><a data-toggle="modal" href="#myModal" class="btn btn-primary">Enviar Feedback</a></td>
			
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        </div>
        <hr>
	</div>
        <!-- Base -->
    <?php include 'footer_1.php' ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
