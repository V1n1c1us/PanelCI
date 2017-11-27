<div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><?php echo $title.'<b>'.$titleB.'</b>'?></a>
            <small><?php echo $boasVindas; ?> - Versão: <?php echo $version;?></small>
        </div>
        <div class="card">
            <div class="body">
            <?php 
                echo validation_errors('<div class="alert alert-danger">','</div>');
                echo form_open('admin/login/logar', 'id="sing_in"');
            ?>
            <div class="msg"><?php echo $title; ?></div>
                <div class="input-group">
                    <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" id="txt-user" name="txt-user" placeholder="Digite Seu Usuário" autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" id="txt-password" name="txt-password" placeholder="Digite Sua Senha">
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-xs-4">
                                <button class="btn bg-pink waves-effect" type="submit">SIGN IN</button>
                            </div>
                        </div>
                    </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>