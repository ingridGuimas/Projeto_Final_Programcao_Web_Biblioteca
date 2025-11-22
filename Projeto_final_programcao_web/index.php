<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biblioteca</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style>
		body {
			background-color: #f8fef8;
		}
		.navbar-brand {
			font-weight: bold;
			font-size: 1.4rem;
		}
		.card-main {
			background: #ffffff;
			border-radius: 12px;
			padding: 25px;
			box-shadow: 0 2px 10px rgba(0,0,0,0.08);
		}
		h1, h2, h3 {
			color: #198754;
			font-weight: 600;
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="?page=">📚 Biblioteca</a>

	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

	       
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
	            Usuários
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=usuario-listar">Listar</a></li>
	            <li><a class="dropdown-item" href="?page=usuario-cadastrar">Cadastrar</a></li>
	          </ul>
	        </li>

	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
	            Livros
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=livro-listar">Listar</a></li>
	            <li><a class="dropdown-item" href="?page=livro-cadastrar">Cadastrar</a></li>
	          </ul>
	        </li>

	    
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
	            Reservas
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=reserva-listar">Listar</a></li>
	            <li><a class="dropdown-item" href="?page=reserva-cadastrar">Cadastrar</a></li>
	          </ul>
	        </li>

	      </ul>
	    </div>
	  </div>
	</nav>


	<div class="container py-4">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-xl-8">

				<div class="card-main">
					<?php
						include('config.php');

						switch (@$_REQUEST['page']) {

							case 'usuario-cadastrar':
								include('usuario-cadastrar.php');
								break;
							case 'usuario-listar':
								include('usuario-listar.php');
								break;
							case 'usuario-editar':
								include('usuario-editar.php');
								break;
							case 'usuario-salvar':
								include('usuario-salvar.php');
								break;

							case 'livro-cadastrar':
								include('livro-cadastrar.php');
								break;
							case 'livro-listar':
								include('livro-listar.php');
								break;
							case 'livro-editar':
								include('livro-editar.php');
								break;
							case 'livro-salvar':
								include('livro-salvar.php');
								break;

							case 'reserva-cadastrar':
								include('reserva-cadastrar.php');
								break;
							case 'reserva-listar':
								include('reserva-listar.php');
								break;
							case 'reserva-editar':
								include('reserva-editar.php');
								break;
							case 'reserva-salvar':
								include('reserva-salvar.php');
								break;

							default:
								print "<h1>Bem-vindo(a) à Biblioteca</h1>";
								print "<p>Selecione uma opção no menu acima para navegar.</p>";
						}
					?>
				</div>

			</div>
		</div>
	</div>

	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
