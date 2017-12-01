<section class="content">
	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						Foto de Peril
					</h2>
				</div>
				<div class="body">
					<div class="row clearfix">
						<!--<?php echo form_open_multipart('admin/cliente/insert');
                    ?>-->
						<form method="post" enctype="multipart/form-data" id="formulario_cadastro">
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">person</i>
									</span>
									<div class="form-line">
										<input type="text" name="nome" id="nome" class="form-control date" placeholder="Nome">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">person</i>
									</span>
									<div class="form-line">
										<input type="text" name="descricao" id="descricao" class="form-control date" placeholder="Descricao">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">email</i>
									</span>
									<div class="form-line">
										<input type="text" name="localizacao" id="localizacao" class="form-control date" placeholder="Localização">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">phone</i>
									</span>
									<div class="form-line">
										<input type="text" name="cidade" id="cidade" class="form-control date" placeholder="Cidade">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">person</i>
									</span>
									<div class="form-line">
										<input type="text" name="quartos" id="quartos" class="form-control date" placeholder="Nª de Quartos">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">location_on</i>
									</span>
									<div class="form-line">
										<input type="text" name="banheiros" id="banheiros" class="form-control date" placeholder="Nª Banheiros">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">location_city</i>
									</span>
									<div class="form-line">
										<input type="text" name="garagem" id="garagem" class="form-control date" placeholder="Garagem">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">location_city</i>
									</span>
									<div class="form-line">
										<input type="text" name="area" id="area" class="form-control date" placeholder="area">
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">person</i>
									</span>
									<div class="form-line">
										<select class="selectpicker" data-live-search="true">
											<?php foreach($clientes as $cliente){?>
											<option value="<?php echo $cliente->idCliente?>" data-tokens="<?php echo $cliente->nomeCliente?>">
												<?php echo $cliente->nomeCliente?>
											</option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-md-12 text-center">
									<button type="submit" id="cadastrar" class="btn btn-primary m-t-15 waves-effect">Cadastrar</button>
								</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<script type="text/javascript">
	$(document).ready(function () {
		var dados = $('#formulario_cadastro').serialize();
		var options = {
			url: '<?= base_url(); ?>' + 'index.php/admin/cliente/insert',
			type: 'POST',
			data: dados,
			dataType: 'html',
			success: function (data) {
				$("#formulario_cadastro").each(function () {
					swal("Good job!", "You clicked the button!", "success");
					this.reset();
				});
				console.log('success' + data);
				console.log(dados);
			},
			error: function () {
				$("#formulario_cadastro").each(function () {
					swal("Ops!", "Algo deu Errado!", "error");
					this.reset();
				});
			},
		};

		$('form').ajaxForm(options);
	});

</script>
