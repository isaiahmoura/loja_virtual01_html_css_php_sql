<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/cadastro.css">
<div class="main_content">
	<div class="login">
		<div class="login_logo">My Store <img src="<?php echo BASE_URL; ?>assets/images/logo_store.jpg"></div>
		<div class="login_form">
			<form method="POST">
				<div class="input_margin">
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" placeholder="nome">
				</div>

				<div class="input_margin">
					<label for="email">E-mail</label>
					<input type="email" name="email" id="email" placeholder="e-mail">
				</div>

				<div class="input_margin">
					<label for="senha1">Senha</label>
					<input type="password" name="senha1" id="senha1" placeholder="senha">
				</div>

				<div class="input_margin">
					<label>Confirmar Senha</label>
					<input type="password" name="senha2" placeholder="confirmar senha">
				</div>
				<?php if(!empty($_SESSION['erro_box'])): ?>
					<div class="erro_box"><?php echo $_SESSION['erro_box']; ?></div>
				<?php endif; ?>
				<div class="button">
					<button type="submit" name="cadastrar">Cadastrar</button>
				</div>
				<a href="<?php echo BASE_URL; ?>login">Já têm uma conta?? Clique aqui</a>
			</form>
		</div>
	</div>
</div>