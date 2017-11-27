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
                    <!--<?php echo form_open_multipart('admin/usuario/insert');
                    ?>-->
                    <form method="post" enctype="multipart/form-data" id="formulario_cadastro">
                        <div class="col-md-12">
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
                                    <i class="material-icons">email</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" name="email" id="email" class="form-control date" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" name="user" id="user" class="form-control date" placeholder="Login">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" name="senha" id="senha" class="form-control date" placeholder="Senha">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="file" name="img"> 
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
/*$(document).ready(function() {

	// process the form
	$('form').submit(function(event) {

		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'nome' 				: $('input[name=nome]').val(),
			'email' 			: $('input[name=email]').val(),
            'user' 	: $('input[name=user]').val(),
            'senha' 	: $('input[name=senha]').val(),
		};

		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: '<?= base_url(); ?>' + 'index.php/admin/usuario/insert', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'html', // what type of data do we expect back from the server
			encode 		: true
		})
			// using the done promise callback
			.done(function(data) {

				// log data to the console so we can see
				console.log(data); 
			})
			// using the fail promise callback
			.fail(function(data) {
				// show any errors
				// best to remove for production
				console.log(data);
			});
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});


/*$(document).ready(function(){
    $("#formulario_cadastro").on("submit", function(){
        var dados = $('#formulario_cadastro').serialize();
        url: '<?= base_url(); ?>' + 'index.php/admin/usuario/insert',
        type: 'POST',
        data: dados,
        dataType: 'html',
        success: function(data){
            $("#formulario_cadastro").each (function(){
            swal("Good job!", "You clicked the button!", "success");
            this.reset();
        });
        console.log('success'+ data);
        console.log(dados);
        },
        error: function(){
            $("#formulario_cadastro").each (function(){
            swal("Ops!", "Algo deu Errado!", "error");
            this.reset();
        });
        console.log('error' + data);
        console.log(dados);
        }
    });
    });
/*
$(document).ready(function(){
        var dados = $('#formulario_cadastro').serialize();
        $("#formulario_cadastro").ajaxForm({
            url: '<?= base_url(); ?>' + 'index.php/admin/usuario/insert',
            type: 'POST',
            data: dados,
            dataType: 'html',
            success: function(data){
                $("#formulario_cadastro").each (function(){
                swal("Good job!", "You clicked the button!", "success");
                this.reset();
            });
            console.log('success'+ data);
            console.log(dados);
            },
            error: function(){
                $("#formulario_cadastro").each (function(){
                swal("Ops!", "Algo deu Errado!", "error");
                this.reset();
            });
            console.log('error' + data);
            console.log(dados);
            }
        });
        return false;
    });
});     */


$(document).ready(function(){
    var dados = $('#formulario_cadastro').serialize();
    var options = {
        url: '<?= base_url(); ?>' + 'index.php/admin/usuario/insert',
        type: 'POST',
        data: dados,
        dataType: 'html',
        success: function(data){
            $("#formulario_cadastro").each (function(){
            swal("Good job!", "You clicked the button!", "success");
            this.reset();
        });
        console.log('success'+ data);
        console.log(dados);
        },
        error: function(){
            $("#formulario_cadastro").each (function(){
            swal("Ops!", "Algo deu Errado!", "error");
            this.reset();
        });
        },
    };

    $('form').ajaxForm(options);
    });
</script>


