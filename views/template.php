<!DOCTYPE html>
<html>
<head>
	<title>Node - Home</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/template.css">
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</head>
<body>
	<header class="header">
		<div class="header_logo">
			<h3>My Store</h3> <img src="<?php echo BASE_URL; ?>assets/images/logo_store.jpg">
		</div>
		<div class="header_main">
			<div class="nav_left">
				<ul>
					<li><a href="<?php echo BASE_URL; ?>home">Página Inicial</a></li>
					<li><a href="#">Sobre Nós</a></li>
					<li><a href="#">Contato</a></li>
				</ul>
			</div>
			<div class="nav_form">
				<form>
					<input type="text" name="buscar_txt" placeholder="Procurar">
					<input type="submit" name="busca" value="Search ?">
				</form>
			</div>
			<div class="nav_user">
					<div class="carrinho"><img src="<?php echo BASE_URL; ?>assets/images/carrinho.png"></div>
					<div class="items_carrinho">
						<a href="<?php echo BASE_URL; ?>carrinho">Carrinho</a>
						<div class="car_item">
							<?php if(isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])): ?>
								<?php echo count($_SESSION['carrinho']); ?>
							<?php else: ?>
								0
							<?php endif; ?>
						</div>
					</div>
				<div class="minha_conta">
					<div class="user_img"><img src="<?php echo BASE_URL; ?>assets/images/user.png"></div>
					<div class="login_infos">
						<?php if(!isset($_SESSION['node']) && empty($_SESSION['node'])): ?>
							<div class="user_title">Minha Conta</div>
							<div class="user_login">
								<a href="<?php echo BASE_URL; ?>login">ENTRAR/CADASTRO</a>
							</div>
						<?php else: ?>
							<div class="user_title">
								<a href="<?php echo BASE_URL; ?>perfil"><?php echo $user_data['nome']; ?>
							</div>
							<div class="user_login">
								<a href="<?php echo BASE_URL; ?>header/exit">Sair</a>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="container">

		<?php $this->loadViewInTemplate($viewName,$viewData);?>
	</div>

	<footer class="footer">
		<div class="footer_content">
			<div class="footer_brand">
				<div class="footer_brand_header ">My Store</div>
				<div class="footer_brand_menu">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Sobre nós</a></li>
						<li><a href="#">Legalidades</a></li>
						<li><a href="#">Acesso a assunto juridicos</a></li>
						<li><a href="#">Endereço</a></li>
					</ul>
				</div>
			</div>
			<div class="footer_brand">
				<div class="footer_brand_header ">Links úteis</div>
				<div class="footer_brand_menu">
					<ul>
						<li><a href="#">Como comprar</a></li>
						<li><a href="#">Termos de uso</a></li>
						<li><a href="#">Refêrencias</a></li>
						<li><a href="#">Doações</a></li>
						<li><a href="#">Contate-nos</a></li>
					</ul>
				</div>
			</div>
			<div class="footer_brand">
				<div class="footer_brand_header ">Empresa</div>
				<div class="footer_brand_menu">
					<ul>
						<li><a href="#">Business</a></li>
						<li><a href="#">Trabalhe conosco</a></li>
						<li><a href="#">Shop</a></li>
						<li><a href="#">Soluções para seu negócio</a></li>
						<li><a href="#">Departamentos</a></li>
					</ul>
				</div>
			</div>
			<div class="comunidade">
				<div class="header_title">Comunidade</div>
				<div class="comunidade_img"><img src="<?php echo BASE_URL; ?>assets/images/logo_comunidade.png"></div>
				<div class="newsletter">
					Fique por dentro das nossas novidades..
					<form>
						<input type="text" name="newsletter" placeholder="Envie-nos seu e-mail">
						<button type="submit" name="enviar">Enviar</button>
					</form>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="copyright_icon"></div>
			Copyright 2021 | My Store | Todos os direitos reservados
			<div class="copyright_icon"></div>
		</div>
	</footer>
</body>
</html>