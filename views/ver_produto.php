<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/ver_produto.css">
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
				<li><a href="#">Chapeus</a></li>
				<li><a href="#">Camisas</a></li>
				<li><a href="#">Calças</a></li>
				<li><a href="#">Calções</a></li>
			</ul>
		</div>
	</div>

	<div class="categoria_nome">
		Calçados
		<div class="header_border"></div>
		<div class="categorias_content">
			<ul>
				<li><a href="#">Chinelas</a></li>
				<li><a href="#">Tênis</a></li>
				<li><a href="#">Sapatos</a></li>
							
			</ul>
		</div>
	</div>

	<div class="categoria_nome">
		Acessórios
		<div class="header_border"></div>
		<div class="categorias_content">
			<ul>
				<li><a href="#">Aneis</a></li>
				<li><a href="#">Braceletes</a></li>
				<li><a href="#">Colares</a></li>
				<li><a href="#">Brincos</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="main_content">
	<div class="ver_produto">
		<div class="produtos_content">
			<div class="img_produto">
				<img src="<?php echo BASE_URL; ?>assets/images/produtos/<?php echo $getProduto['img_produto']; ?>">
			</div>
			<div class="produtos_info">
				<div class="produto_nome"><?php echo $getProduto['nome_produto']; ?></div>
				<div class="produto_preço">
					R$ <?php echo $getProduto['preco_produto']; ?>
					<div class="preco_border"></div>
				</div>
				<div class="produto_vendedor">
					Vendido e entregue por: - <a href="#">Loja 1</a>
				</div>
				<div class="produto_button">
					<form method="POST">
						<a href="<?php echo BASE_URL; ?>header/add_carrinho/<?php echo $getProduto['id']; ?>">Adicionar ao Carrinho</a>
						<a href="<?php echo BASE_URL; ?>header/add_carrinho/<?php echo $getProduto['id']; ?>">Comprar </a>
					</form>
				</div>
			</div>
		</div>
		<div class="produtos_more">
			<div class="separador">
				descriçao do produto
			</div>
			<div class="produto_form">
				<div class="desc_img">
					<img src="<?php echo BASE_URL; ?>assets/images/user.png">
				</div>
				<div class="desc_form">
					<form method="POST">
						<textarea name="desc_produto" placeholder="Avalie este produto"></textarea>
						<div class="form_button"><button>Publicar Comentário</button></div>
					</form>
				</div>
			</div>
			<div class="recomendações">
				Voçê recomenda este produto?? - 
				<a href="#">Recomendo</a>
				<a href="#">Não Recomendo</a>
			</div>
			<div class="produto_comentarios">
				<div class="produto_comentarios_content">
					<div class="comentario_img">
						<img src="<?php echo BASE_URL; ?>assets/images/user.png">
					</div>
					<div class="produto_txt">aaa</div>
					recomendo
				</div>
				<div class="produto_comentarios_content">
					<div class="comentario_img">
						<img src="<?php echo BASE_URL; ?>assets/images/user.png">
					</div>
					<div class="produto_txt">comentaffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffadwdasafwfawgahgahaadadawafawawdararadsdwwarawraweraweawdadwawwrwaaewaeaeaeario</div>
					recomendo
				</div>
				<div class="produto_comentarios_content">
					<div class="comentario_img">
						<img src="<?php echo BASE_URL; ?>assets/images/user.png">
					</div>
					<div class="produto_txt">comentaffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffadwdasafwfawgahgahaadadawafawawdararadsdwwarawraweraweawdadwawwrwaaewaeaeaeario</div>
					recomendo
				</div>
				<div class="produto_comentarios_content">
					<div class="comentario_img">
						<img src="<?php echo BASE_URL; ?>assets/images/user.png">
					</div>
					<div class="produto_txt">comentaffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffadwdasafwfawgahgahaadadawafawawdararadsdwwarawraweraweawdadwawwrwaaewaeaeaeario</div>
					recomendo
				</div>
				<div class="produto_comentarios_content">
					<div class="comentario_img">
						<img src="<?php echo BASE_URL; ?>assets/images/user.png">
					</div>
					<div class="produto_txt">comentaffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffadwdasafwfawgahgahaadadawafawawdararadsdwwarawraweraweawdadwawwrwaaewaeaeaeario</div>
					recomendo
				</div>
				<div class="produto_comentarios_content">
					<div class="comentario_img">
						<img src="<?php echo BASE_URL; ?>assets/images/user.png">
					</div>
					<div class="produto_txt">comentaffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffadwdasafwfawgahgahaadadawafawawdararadsdwwarawraweraweawdadwawwrwaaewaeaeaeario</div>
					recomendo
				</div>
				<div class="produto_comentarios_content">
					<div class="comentario_img">
						<img src="<?php echo BASE_URL; ?>assets/images/user.png">
					</div>
					<div class="produto_txt">comentaffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffadwdasafwfawgahgahaadadawafawawdararadsdwwarawraweraweawdadwawwrwaaewaeaeaeario</div>
					recomendo
				</div>
				<div class="produto_comentarios_content">
					<div class="comentario_img">
						<img src="<?php echo BASE_URL; ?>assets/images/user.png">
					</div>
					<div class="produto_txt">comentaffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffadwdasafwfawgahgahaadadawafawawdararadsdwwarawraweraweawdadwawwrwaaewaeaeaeario</div>
					recomendo
				</div>
				<div class="produto_comentarios_content">
					<div class="comentario_img">
						<img src="<?php echo BASE_URL; ?>assets/images/user.png">
					</div>
					<div class="produto_txt">comentaffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffadwdasafwfawgahgahaadadawafawawdararadsdwwarawraweraweawdadwawwrwaaewaeaeaeario</div>
					recomendo
				</div>
				<div class="produto_comentarios_content">
					<div class="comentario_img">
						<img src="<?php echo BASE_URL; ?>assets/images/user.png">
					</div>
					<div class="produto_txt">comentaffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffadwdasafwfawgahgahaadadawafawawdararadsdwwarawraweraweawdadwawwrwaaewaeaeaeario</div>
					recomendo
				</div>
				<div class="produto_comentarios_content">
					<div class="comentario_img">
						<img src="<?php echo BASE_URL; ?>assets/images/user.png">
					</div>
					<div class="produto_txt">comentaffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffadwdasafwfawgahgahaadadawafawawdararadsdwwarawraweraweawdadwawwrwaaewaeaeaeario</div>
					recomendo
				</div>
			</div>
		</div>
	</div>
</div>