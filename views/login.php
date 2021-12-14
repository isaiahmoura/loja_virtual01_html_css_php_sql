<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/login.css">
<div class="main_content">
	<div class="login">
		<div class="login_logo">My Store <img src="<?php echo BASE_URL; ?>assets/images/logo_store.jpg"></div>
		<div class="login_form">
			<form method="POST">
				<div class="input_margin">
					<label>E-mail</label>
					<input type="email" name="email" placeholder="e-mail">
				</div>

				<div class="input_margin">
					<label>Senha</label>
					<input type="password" name="senha" placeholder="senha">
				</div>
				<?php if(!empty($_SESSION['erro_box'])): ?>
					<div class="erro_box"><?php echo $_SESSION['erro_box']; ?></div>
				<?php endif; ?>
				<div class="button">
					<button type="submit" name="entrar">Entrar</button>
				</div>
				<a href="<?php echo BASE_URL; ?>login/cadastro/">Cadastre-se</a><br>
				<a href="<?php echo BASE_URL; ?>home">Voltar</a>
			</form>
		</div>
	</div>
</div>