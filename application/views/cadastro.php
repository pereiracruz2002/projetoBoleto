<?php 
include("header.php");
?>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center titulo">Cadastre-se</h3>
				</div>
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<form id="form-cadastro">
						<div class="form-group">
							<input type="text" class="form-control" id="cpf" placeholder="CPF">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="nome" placeholder="NOME">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" placeholder="EMAIL">
						</div>
						<div class="row">
							<div class="col-md-6">
								<select class="form-control selecao">
									<option>UNIDADE</option>
									<option>DL</option>
									<option>DN</option>
									<option>DS</option>
									<option>Seedcare</option>
								</select>
							</div>
							<div class="col-md-6">
								<select class="form-control selecao">
									<option>FUNÇÃO</option>
									<option>Diretor</option>
									<option>Gerente</option>
									<option>GRV</option>
									<option>RTS</option>
									<option>RTS</option>
									<option>RTSS</option>
									<option>RTV</option>
									<option>RTV OTO</option>
									<option>RTVKAM Seedcare</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="senha" placeholder="SENHA">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="senha_confirmacao" placeholder="REPITA SENHA">
						</div>

					<button type="submit" class="btn btn-green btn-lg btn-block">Enviar</button>
					</form>
				</div>
				<div class="col-md-3">
					<div class="row">
						<p class="obrigatorio">campo obrigatório</p>
					</div>
					<div class="row">
						<p class="obrigatorio">campo obrigatório</p>
					</div>
					<div class="row">
						<p class="obrigatorio">campo obrigatório</p>
					</div>
					<div class="row">
						<p class="obrigatorio">campo obrigatório</p>
					</div>
					<div class="row">
						<p class="obrigatorio">campo obrigatório</p>
					</div>
					<div class="row">
						<p class="obrigatorio">campo obrigatório</p>
					</div>
	
				</div>
			</div>
		</div>
	</main>
<?php 
include("footer.php");
?>