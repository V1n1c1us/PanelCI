<section class="content">
	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						<?php echo $titleTable; ?>
					</h2>
				</div>
				<div class="body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover dataTable js-exportable">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Sobrenome</th>
									<th>E-mail</th>
									<th>CPF</th>
									<th>Telefone</th>
									<th>Endereço</th>
									<th>Cidade</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($clientes as $cliente){?>
								<tr>
									<td>
										<?php echo $cliente->nomeCliente?>
									</td>
									<td>
										<?php echo $cliente->sobrenome?>
									</td>
									<td>
										<?php echo $cliente->email?>
									</td>
									<td>
										<?php echo $cliente->cpf?>
									</td>
									<td>
										<?php echo $cliente->telefone?>
									</td>
									<td>
										<?php echo $cliente->endereco?>
									</td>
									<td>
										<?php echo $cliente->cidade?>
									</td>
								</tr>
								<?php }?>
							</tbody>
						</table>
					</div>
				</div>
</section>
