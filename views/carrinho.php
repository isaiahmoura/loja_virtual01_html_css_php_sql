<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/carrinho.css">
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
	<h1>Carrinho de Compras</h1>
	<table border="0" width="100%">
		<tr>
			<th align="left">Imagem</th>
			<th align="left">Nome do Produto</th>
			<th align="left">Valor</th>
			<th align="left">Ações</th>
		</tr>
		<?php $valor_total = 0; ?>
		<?php foreach($getCarrinho as $carrinho): ?>
			<tr>
				<td><img src="<?php echo BASE_URL; ?>assets/images/produtos/<?php echo $carrinho['img_produto']; ?>" width="60"></td>
				<td><?php echo $carrinho['nome_produto']; ?></td>
				<td>R$ <?php echo $carrinho['preco_produto']; ?></td>
				<td><a href="#">Remover Produto</a></td>
			</tr>
			<?php $valor_total += $carrinho['preco_produto']; ?>
		<?php endforeach; ?>
		<tr>
			<td colspan="2" align="right">Sub - Total: </td>
			<td align="left">R$ <?php echo $valor_total; ?></td>
			<td></td>
		</tr>
	</table>
</div>