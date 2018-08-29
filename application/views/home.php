<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<head>
	<title>Escola Inteligente - by FLY SOFTWARES</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

	<div class="container">

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="">Escola Inteligente</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navSite">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navSite">
				
				<ul class="navbar-nav ml-auto">
					
					<li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#equipe"><h6 class="text-white">Quem somos nós?</h6></a></li>

					<li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#mockup"><h6 class="text-white">Protótipos de interface</h6></a></li>

					<li class="nav-item"><a class="nav-link" href="https://escolainteligente.000webhostapp.com/" target="_blank"><h6 class="text-white">Versão de demonstração</h6></a></li>

				</ul>
			</div>
		</nav>

		<div class="container bg-primary bg-info">

			<div class="row my-4">
				
				<div class="col mb-4 my-4">
					<div class="card">
						<div class="card-body text-center">
							<img src="<?php echo base_url('assets/img/coord.png');?>" class="image-responsive" width="150">
							<h4 class="card-title">Coordenação</h4>
							<p class="class-text">O portal do coordenador torna a vida dos dirigentes muito mais fácil, com todas as ferramentas disponíveis, é possível ter o total controle das atividades realizadas durante o ano letivo.</p>
						</div>
					</div>
				</div>

				<div class="col mb-4 my-4">
					<div class="card">
						<div class="card-body text-center">
							<img src="<?php echo base_url('assets/img/teacher.png');?>" class="image-responsive" width="150">
							<h4 class="card-title">Professores</h4>
							<p class="class-text">O portal do professor permite o total controle das atividades realizadas em aula, as ferramentas presentes neste módulo possibilitam a interação com outros usuários do sistema.</p>
						</div>
					</div>
				</div>

				<div class="col mb-4 my-4">
					<div class="card">
						<div class="card-body text-center">
							<img src="<?php echo base_url('assets/img/std2.png');?>" class="image-responsive" width="150">
							<h4 class="card-title">Alunos</h4>
							<p class="class-text">O Módulo do aluno permite que os pais tenham total conhecimento da vida acadêmica dos seus filhos, sendo possível acompanhar a frequência, notas, médias e o desempenho geral em cada matéria.</p>
						</div>
					</div>
				</div>

			</div>

		</div>

		<div class="row my-4">

			<div class="col mb-4">
				<div class="card">
					<div class="card-body text-center">
						<h4 class="card-title">O projeto</h4>
						<!-- <p class="class-text">Escopo do projeto</p> -->
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#Oprojeto">Visualizar</a>
					</div>
				</div>
			</div>

			<div class="col mb-4">
				<div class="card">
					<div class="card-body text-center">
						<h4 class="card-title">Canvas</h4>
						<!-- <p class="class-text">Modelo Canvas</p> -->
						<a href="<?php echo base_url();?>principal/baixarCanvas" class="btn btn-primary">Baixar</a>
					</div>
				</div>
			</div>

			<div class="col mb-4">
				<div class="card">
					<div class="card-body text-center">
						<h4 class="card-title">Relatório</h4>
						<!-- <p class="class-text">Expectativas do projeto</p> -->
						<a href="<?php echo base_url();?>principal/baixarRelatorio" class="btn btn-primary">Baixar</a>
					</div>
				</div>
			</div>

		</div>

	</div>

	<!-- MODALS -->

	<!-- DEFINIÇÃO DO PROJETO -->
	<div class="modal fade" id="Oprojeto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h5 class="modal-title text-white" id="exampleModalLabel">O projeto</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="text-white" aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<p>O <strong>Escola Inteligente</strong> é um moderno sistema acadêmico que oferece mais praticidade para os coordenadores, professores, pais e alunos, uma vez que é dotado de diversas ferramentas que possibilitam a execução ágil de atividades corriqueiras de um ambiente escolar.</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- FIM DO MODAL -->

	<!-- QUEM SOMOS NÓS? -->
	<div class="modal fade" id="equipe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h5 class="modal-title text-white" id="exampleModalLabel">A equipe</h5>
					<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="container">
						<div class="row" align="center">
							<div class="col mb-4">
								<div class="card">
									<div class="card-body">
										<img class="rounded-circle" src="<?php echo base_url('assets/img/fr.jpg');?>" alt="Card image cap" height="150" width="150">
										<h4 class="card-title">Francisco de Assis</h4>
										<p class="class-text">1610016021</p>
										<strong><p class="class-text">Gestão da Tecnologia da Informação</p></strong>
										<p class="class-text">P4</p>
									</div>
								</div>
							</div>

							<!-- <div class="col mb-4">
								<div class="card">
									<div class="card-body">
										<img class="rounded-circle" src="<?php echo base_url('assets/img/rc.jpg');?>" alt="Card image cap" height="150" width="150">
										<h4 class="card-title">José Ricardo Silvestre</h4>
										<p class="class-text">1620017275</p>
										<strong><p class="class-text">Gestão da Tecnologia da Informação</p></strong>
										<p class="class-text">P4</p>
									</div>
								</div>
							</div> -->

							<div class="col mb-4">
								<div class="card">
									<div class="card-body">
										<img class="rounded-circle" src="<?php echo base_url('assets/img/panda.jpg');?>" alt="Card image cap" height="150" width="150">
										<h4 class="card-title">Lucas Ribeiro de Souza</h4>
										<p class="class-text">1610015863</p>
										<strong><p class="class-text">Gestão da Tecnologia da Informação</p></strong>
										<p class="class-text">P4</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row" align="center">
							<div class="col mb-4">
								<div class="card">
									<div class="card-body">
										<img class="rounded-circle" src="<?php echo base_url('assets/img/lucas.jpg');?>" alt="Card image cap" height="150" width="150">
										<h4 class="card-title">Lucas Rafael de Oliveira Barbosa</h4>
										<p class="class-text">1620016775</p>
										<strong><p class="class-text">Gestão da Tecnologia da Informação</p></strong>
										<p class="class-text">P4</p>
									</div>
								</div>
							</div>
							
							<div class="col mb-4">
								<div class="card">
									<div class="card-body">
										<img class="rounded-circle" src="<?php echo base_url('assets/img/ph.jpg');?>" alt="Card image cap" height="150" width="150">
										<h4 class="card-title">Pedro Henrique de Morais Torres</h4>
										<p class="class-text">1620017488</p>
										<strong><p class="class-text">Gestão da Tecnologia da Informação</p></strong>
										<p class="class-text">P4</p>
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- FIM -->

	<!-- MOCKUPS -->
	<div class="modal fade" id="mockup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h5 class="modal-title text-white" id="exampleModalLabel">Protótipos de interface - módulo da coordenação</h5>
					<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="container">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="<?php echo base_url('assets/img/homeC.jpg');?>" alt="Home">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="<?php echo base_url('assets/img/1C.jpg');?>" alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="<?php echo base_url('assets/img/2C.jpg');?>" alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="<?php echo base_url('assets/img/3C.jpg');?>" alt="Third slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="<?php echo base_url('assets/img/4C.jpg');?>" alt="Fourth slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Próximo</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Anterior</span>
							</a>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- FIM -->

</body>
</html>