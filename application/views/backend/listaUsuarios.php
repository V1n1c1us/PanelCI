<section class="content">
	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						EXPORTABLE TABLE
					</h2>
					<ul class="header-dropdown m-r--5">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="material-icons">more_vert</i>
							</a>
							<ul class="dropdown-menu pull-right">
								<li>
									<a href="javascript:void(0);">Action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Another action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Something else here</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover dataTable js-exportable">
							<thead>
								<tr>
									<th>Name</th>
									<th>Position</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Position</th>
								</tr>
							</tfoot>
							<tbody>
                            <?php foreach($usuarios as $user){?>
								<tr>
									<td><?php echo $user->nome?></td>
									<td><?php echo $user->nome?></td>
								</tr>
                                <?php }?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- <div class="table-responsive">
					<table id='myTable' class="js-basic-example " cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Foto</th>
								<th>Nome</th>
								<th>Email</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</thead>
                        <tbody>
						<?php foreach($usuarios as $user){?>
						<tr>
							<td>
								<img src="<?php echo base_url()?>/uploads/<?php echo $user->img?>" alt="">
							</td>
							<td>
								<?php echo $user->nome?>
							</td>
							<td>
								<?php echo $user->nome?>
							</td>
						</tr>
						<?php }?>
                        </tbody>
					</table>
				</div>
			</div>
		</div>-->
</section>
