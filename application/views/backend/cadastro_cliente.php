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
                                    <input type="text" name="nomeCliente" id="nomeCliente" class="form-control date" placeholder="Nome">
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" name="sobrenome" id="sobrenome" class="form-control date" placeholder="Sobrenome">
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
                                    <i class="material-icons">phone</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" name="telefone" id="user" class="form-control date" placeholder="Telefone">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" name="cpf" id="cpf" class="form-control date" placeholder="CPF">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">location_on</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" name="endereco" id="endereco" class="form-control date" placeholder="Endereço">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">location_city</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" name="cidade" id="cidade" class="form-control date" placeholder="Cidade">
                                </div>
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
$(document).ready(function(){
    var dados = $('#formulario_cadastro').serialize();
    var options = {
        url: '<?= base_url(); ?>' + 'index.php/admin/cliente/insert',
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


