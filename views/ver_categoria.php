<div class="left_content">
	<div class="left_content_header">
		Categorias
		<div class="header_border"></div>
	</div>
	<div class="categoria_nome">
		Roupas
		<div class="header_border"></div>
		<div class="categorias_content">
			<ul>
				<?php foreach($getCategoriasRoupas as $roupas): ?>
					<li>
						<a href="<?php echo BASE_URL; ?>categorias/index/<?php echo $roupas['categoria']; ?>"><?php echo $roupas['titulo']; ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

	<div class="categoria_nome">
		Calçados
		<div class="header_border"></div>
		<div class="categorias_content">
			<ul>
				<?php foreach($getCategoriasCalcados as $calçados): ?>
					<li>
						<a href="<?php echo BASE_URL; ?>categorias/index/<?php echo $calçados['categoria']; ?>"><?php echo $calçados['titulo']; ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

	<div class="categoria_nome">
		Acessórios
		<div class="header_border"></div>
		<div class="categorias_content">
			<ul>
				<?php foreach($getCategoriasAcessorios as $acessorios): ?>
					<li>
						<a href="<?php echo BASE_URL; ?>categorias/index/<?php echo $acessorios['categoria']; ?>"><?php echo $acessorios['titulo']; ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

<div class="main_content">
	<div class="produtos">
		<?php foreach($getProdutosByCategoria as $produtos): ?>
			<div class="produto_item">
				<div class="produto_img">
					<a href="<?php echo BASE_URL; ?>ver_produto/index/<?php echo $produtos['id']; ?>"><img src="<?php echo BASE_URL; ?>assets/images/produtos/<?php echo $produtos['img_produto']; ?>"></a>
				</div>
				<div class="produto_info">
					<div class="produto_nome">
						<?php echo $produtos['nome_produto']; ?>
					</div>
					<div class="produto_loja">
						Vendido por: Loja 1
					</div>
					<div class="produto_preco">
						R$ <?php echo $produtos['preco_produto']; ?>
					</div>
					<div class="produto_button">
						<a href="<?php echo BASE_URL; ?>header/add_carrinho/<?php echo $produtos['id']; ?>
						">Adicionar ao Carrinho</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="produtos">
		<?php foreach($getProdutosByCategoria as $produtos): ?>
			<div class="produto_item">
				<div class="produto_img">
					<a href="<?php echo BASE_URL; ?>ver_produto/index/<?php echo $produtos['id']; ?>"><img src="<?php echo BASE_URL; ?>assets/images/produtos/<?php echo $produtos['img_produto']; ?>"></a>
				</div>
				<div class="produto_info">
					<div class="produto_nome">
						<?php echo $produtos['nome_produto']; ?>
					</div>
					<div class="produto_loja">
						Vendido por: Loja 1
					</div>
					<div class="produto_preco">
						R$ <?php echo $produtos['preco_produto']; ?>
					</div>
					<div class="produto_button">
						<a href="<?php echo BASE_URL; ?>header/add_carrinho/<?php echo $produtos['id']; ?>
						">Adicionar ao Carrinho</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="produtos">
		<?php foreach($getProdutosByCategoria as $produtos): ?>
			<div class="produto_item">
				<div class="produto_img">
					<a href="<?php echo BASE_URL; ?>ver_produto/index/<?php echo $produtos['id']; ?>"><img src="<?php echo BASE_URL; ?>assets/images/produtos/<?php echo $produtos['img_produto']; ?>"></a>
				</div>
				<div class="produto_info">
					<div class="produto_nome">
						<?php echo $produtos['nome_produto']; ?>
					</div>
					<div class="produto_loja">
						Vendido por: Loja 1
					</div>
					<div class="produto_preco">
						R$ <?php echo $produtos['preco_produto']; ?>
					</div>
					<div class="produto_button">
						<a href="<?php echo BASE_URL; ?>header/add_carrinho/<?php echo $produtos['id']; ?>
						">Adicionar ao Carrinho</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>