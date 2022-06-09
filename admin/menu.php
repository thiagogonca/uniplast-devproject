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
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li>
                        <a href="banner.php">Banners</a>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos<b class="caret"></b></a>
                        <ul class="dropdown-menu">
							<li><a href="cadastro_produto.php">Cadastrar Produto</a></li>
							<li><a href="consulta_uniplast.php">Consultar Produto</a></li>
                        </ul>
                    </li>
					<li>
						<div style="padding-top: 3%">
						<form class="form-inline" method="GET" action="pag_pesquisa.php">
							<div class="form-group">
								<input type="text" name="pesquisar" class="form-control" id="exampleInputName2" placeholder="Pesquise Aqui...">
							</div>
							<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
						</form>
						</div>
					</li>
					<li>
                        <a href="index.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>