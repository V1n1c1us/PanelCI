<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url('assets/backend/images/user.png')?>" width="48" height="48" alt="User"/>
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('userLogado')->nome;?></div>
                    <div class="email"><?php echo $this->session->userdata('userLogado')->email;?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo base_url('admin/login/logout');?>"><i class="material-icons">input</i>Sair</a></li>  
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">NAVEGAÇÃO PRINCIPAL</li>
                    <li class="active">
                        <a href="#">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">reorder</i>
                            <span>Cadastros</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                            <a href="<?php echo base_url('admin/usuario/');?>">Usuário</a>
                            </li>
                            <li>
                            <a href="<?php echo base_url('admin/usuario/listaUsuarios');?>">Listar Usuários</a>
                            </li>
                            <li>
                            <a href="<?php echo base_url('admin/cliente/');?>">Cliente</a>
                            </li>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="<?php base_url('admin/usuario/addUser');?>">Usuário</a>
                                    </li>
                                    <li>
                                        <a href="/promocoes">Promoção</a>
                                    </li>
                                    <li>
                                        <a href="/pizzas">Pizza</a>
                                    </li>
                                    <li>
                                        <a href="/sabores">Sabor</a>
                                    </li>
                                    <li>
                                        <a href="/mesas">Mesa</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Estoque</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="/produtos">Produtos</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Financeiro</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="/titulos">Contas</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">settings</i>
                            <span>Configurações</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/usuarios">Usuários</a>
                            </li>
                            <li>
                                <a href="/grupos">Grupos</a>
                            </li>
                            <li>
                                <a href="#">Parâmetros do sistema</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="javascript:void(0);">Delivery</a>.
                </div>
                <div class="version">
                    <b>Versão: </b> <?php echo $version;?>
                </div>
            </div>
            <!-- #Footer -->
        </aside>